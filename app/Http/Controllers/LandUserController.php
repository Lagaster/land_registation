<?php

namespace App\Http\Controllers;

use App\Models\LandUser;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreLandUserRequest;
use App\Http\Requests\UpdateLandUserRequest;

class LandUserController extends Controller
{
    public function showConfirmLandTransfer()
    {
        $landusers =  LandUser::where('verified_at',null)->get();


        return view('admin.binds.landusers.fullpaid',compact('landusers')) ;
    }
    public function confirmLandTransfer(LandUser $landUser)
    {
        # code...
        $landUser->update([
            'verified_at'=> now(),
            'verified_by'=> auth()->user()->id
        ]);
        Session::flash('success',"Land Purchase Confirmed");
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLandUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandUserRequest $request)
    {
        LandUser::create($request->validated());
         Session::flash('success',"Land Assigned to user.");
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandUser  $landUser
     * @return \Illuminate\Http\Response
     */
    public function show(LandUser $landUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandUser  $landUser
     * @return \Illuminate\Http\Response
     */
    public function edit(LandUser $landUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandUserRequest  $request
     * @param  \App\Models\LandUser  $landUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandUserRequest $request, LandUser $landUser)
    {
        $landUser->update($request->validated());
        Session::flash('success',"Land Assigned to user updated.");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandUser  $landUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandUser $landUser)
    {
        $landUser->delete();
        Session::flash('success',"Land Assigned to user deleted.");
        return redirect()->route('lands.index');
    }
}
