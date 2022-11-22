<?php

namespace App\Http\Controllers;

use App\Models\Bind;
use App\Models\User;
use App\Models\LandUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBindRequest;
use App\Http\Requests\UpdateBindRequest;

class BindController extends Controller
{
    public function bindAction(Request $request, Bind $bind)
    {

        $request->validate([
            'status'=>"required|string|starts_with:approved,reject"
        ]);

        # code...
        $bind->update(
            [
                'status'=> trim($request->status)
            ]

        );
        return back()->with('success','Bind actions saved');
    }
    public function buyerBinds()
    {
        $binds = Bind::query()->whereBelongsTo(Auth::user(),'user')->get();
        return view('admin.binds.buyers',compact('binds'));
    }

    /**
     * Display a listing of the resource of seller binds.
     *
     * @return \Illuminate\Http\Response
     */
    public function sellerBinds()
    {
        $user = Auth::user();
        $landIds = LandUser::where('user_id',$user->id)->where('status','approved')->pluck('land_id');

        $binds = Bind::query()->whereIn('land_id',$landIds)->get();

        return view('admin.binds.seller',compact('binds'));
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
     * @param  \App\Http\Requests\StoreBindRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBindRequest $request)
    {
        $data = $request->validated();
        $data['user_id']  = Auth::user()->id;
        $bind = Bind::create($data);
        return back()->with('success',"Bind placed successfully, wait for feedback.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bind  $bind
     * @return \Illuminate\Http\Response
     */
    public function show(Bind $bind)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bind  $bind
     * @return \Illuminate\Http\Response
     */
    public function edit(Bind $bind)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBindRequest  $request
     * @param  \App\Models\Bind  $bind
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBindRequest $request, Bind $bind)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bind  $bind
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bind $bind)
    {
        $bind->delete();
        return back()->with('success','Bind deleted successfully');
    }
}
