<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLandRateRequest;
use App\Http\Requests\UpdateLandRateRequest;
use App\Models\LandRate;

class LandRateController extends Controller
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
     * @param  \App\Http\Requests\StoreLandRateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandRateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function show(LandRate $landRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function edit(LandRate $landRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandRateRequest  $request
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandRateRequest $request, LandRate $landRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandRate $landRate)
    {
        //
    }
}
