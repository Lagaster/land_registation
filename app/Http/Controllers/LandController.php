<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandRequest;
use App\Http\Requests\UpdateLandRequest;
use App\Models\Land;
use App\Models\LandUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LandController extends Controller
{
    public function myLands()
    {
        # code...
        $user = Auth::user();
        $lands = LandUser::with('land')->whereBelongsTo($user,'owner')
        ->where('is_owner',true)
        ->get();
        // return $lands;
        return view('admin.land.mylands',compact('lands'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lands = Land::with("users")->latest()->get();
        return view('admin.land.index',compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::latest()->get();
        return view("admin.land.create",compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandRequest $request)
    {
        $data = $request->validated();
        // return $data ;
        $land = Land::create([
            "plot_no"=>$data["plot_no"],
            "size"=>$data[ "size"],
            "sheet_no"=>$data[ "sheet_no"],
            "title_deed"=>$data[ "title_deed"]
        ]);
        $landowner = LandUser::create(
            [
                'land_id'=>$land->id,
                'user_id'=> $data['land_owner'],
                'is_owner'=>true,
                'start'=> now(),
                'status'=>'approved',
                'verified_at'=> now(),
                'verified_by'=> auth()->user()->id
            ]
        );
        Session::flash('success',"Land record created");
        return redirect()->route('lands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function show(Land $land)
    {
        return view('admin.land.show',compact('land')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function edit(Land $land)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandRequest  $request
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandRequest $request, Land $land)
    {
        $land->update( $request->validated());
        Session::flash('success',"Land record Updated");
        return redirect()->route('lands.show',$land);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Land $land)
    {
        $land->delete();
        Session::flash('success',"Land record deleted");
        return redirect()->route('lands.index');
    }
}
