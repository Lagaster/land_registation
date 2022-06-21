<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandUserRequest;
use App\Http\Requests\UpdateLandUserRequest;
use App\Models\LandUser;

class LandUserController extends Controller
{
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandUser  $landUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandUser $landUser)
    {
        //
    }
}
