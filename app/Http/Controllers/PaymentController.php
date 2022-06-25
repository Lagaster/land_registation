<?php

namespace App\Http\Controllers;

use App\Models\Bind;
use App\Models\Land;
use App\Models\User;
use App\Models\Payment;
use App\payment\MpesaGateway;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\LandUser;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Bind $bind)
    {
        $payments = Payment::latest()->where('land_id',$bind->land_id)
        ->where('paid_by',Auth::user()->id)->get();
        $paymentTotal = Payment::latest()->where('land_id',$bind->land_id)
        ->where('paid_by',Auth::user()->id)->sum('amount') ;
        $land = Land::find($bind->land_id);
        return view('admin.binds.payments.index',compact('payments','paymentTotal','land'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        $data = $request->validated();
        try {
            $mpesa = new MpesaGateway();
            $response = $mpesa->pay_land("0707585566", "10");
            $authUser = User::find(Auth::user()->id);
            $phone = $data['phone'];
            $amount = $data['amount'];
            $land = $data['land_id'];
            $paid_to = $data['paid_to'];
            $authUser->payments_paid()->create([
                'paid_to' => $paid_to,
                'land_id' => $land,
                'merchantRequestID' => $response['MerchantRequestID'],
                'checkoutRequestID' => $response['CheckoutRequestID'],
                'responseCode' => $response['ResponseCode'],
                'responseDescription' => $response['ResponseDescription'],
                'customerMessage' => $response['CustomerMessage'],
                'phoneNumber' => $phone,
                'amount' => $amount

            ]);
            Session::flash('success', $response->customerMessage);
            $paymentTotal = Payment::latest()->where('land_id',$land)
            ->where('paid_by',Auth::user()->id)->sum('amount') ;
            $expectedAmount = Land::find($land)->valuation_Price()->total ;
            $total =  $expectedAmount -  $paymentTotal ;
            if ($total < 1) {
                # code...
               $la =  LandUser::where('land_id',$land)->where('status','approved')->first() ;
               $la->status = "approved";
               $la->end = now();
            //    $la->verified_at = now();
            $la->save();
            $newLand = LandUser::create([
                'land_id'=>$land,
                'user_id'=>Auth::user()->id,
                'is_owner'=>true,
                'start' => now()
            ]);
            Session::flash('success',"The Land registrar will approve your purchase within 24 hours.");

            }

            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', $th->getMessage());
        }

        return back();
    }

    public function handle_result(Request $request)
    {
        $data = $request->all();
        $data = $data['Body']['stkCallback'];
        $result = Payment::where('checkoutRequestID', $data['CheckoutRequestID'])->where('active', true)->first();
        $result->active = false;
        $result->result = json_encode($data);
        $result->save();

        if ($result == null || $result->merchantRequestID != $data['MerchantRequestID'])
            return null;
        $result->resultCode = $data['ResultCode'];
        $result->resultDesc = $data['ResultDesc'];
        $result->save();
        if ($result->resultCode == 0) {
            $items = $data['CallbackMetadata']['Item'];
            foreach ($items as $item) {
                if ($item['Name'] == 'Amount' && array_key_exists('Value', $item))
                    $result->amount = $item['Value'];
                elseif ($item['Name'] == 'MpesaReceiptNumber' && array_key_exists('Value', $item))
                    $result->mpesaReceiptNumber = $item['Value'];
                elseif ($item['Name'] == 'Balance' && array_key_exists('Value', $item))
                    $result->balance = $item['Value'];
                elseif ($item['Name'] == 'TransactionDate' && array_key_exists('Value', $item))
                    $result->transactionDate = date('Y-m-d H:i:s', strtotime($item['Value']));
            }
            $result->save();

        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
