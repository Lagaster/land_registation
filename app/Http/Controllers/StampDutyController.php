<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\User;
use App\Models\StampDuty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreStampDutyRequest;
use App\Http\Requests\UpdateStampDutyRequest;

class StampDutyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stampDuties=StampDuty::all();
        return view('admin.stamps.index',compact('stampDuties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lands = Land::all();
        $users= User::all();
        return view('admin.stamps.create',compact('lands','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStampDutyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStampDutyRequest $request)
    {
        $data = $request->validated();
        if ($data['file']) {
            # upload valuation file
            $file = $request->file('file')->store('public/stampduties' );

            $file =explode('/', $file) ;
            $data['file'] = end($file);
        }

        $data['verified_by']=Auth::user()->id;
        $data['verified_at']=now();
        StampDuty::create($data);

        Session::flash('success',"StampDuty record created");
        return redirect()->route('stampDuties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function show(StampDuty $stampDuty)
    {
        return view('admin.stamps.show',compact('stampDuty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function edit(StampDuty $stampDuty)
    {
        $lands = Land::all();
        $users= User::all();
        return view('admin.stamps.edit',compact('lands','users','stampDuty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStampDutyRequest  $request
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStampDutyRequest $request, StampDuty $stampDuty)
    {
        $data = $request->validated();
        if ($data['file']) {
            # upload valuation file
            $file = $request->file('file')->store('public/stampduties' );

            $file =explode('/', $file) ;
            $data['file'] = end($file);
        }

        $data['verified_by']=Auth::user()->id;
        $data['verified_at']=now();
        $stampDuty->update($data);

        Session::flash('success',"StampDuty record updated");
        return redirect()->route('stampDuties.index');
    }
    public function approvestamp(Request $request, $id){
        $status = request('status') ;


        $post = StampDuty::find($id);

        $post->status = $status;
        $post->verified_at= request('verified_at') ;
        $post->verified_by= request('verified_by') ;


       if ( $post->save()) {
           # code...

           Session::flash('success',"Stamp_Duty ". $status ) ;
       }else{
           Session::flash('error',"Error occured" ) ;
       }
       return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function destroy(StampDuty $stampDuty)
    {
        $stampDuty->delete();
        Session::flash('success',"StampDuty record deleted successfully");
        return redirect()->route('landRates.index');
    }
}
