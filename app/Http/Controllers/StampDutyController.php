<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStampDutyRequest;
use App\Http\Requests\UpdateStampDutyRequest;
use App\Models\StampDuty;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStampDutyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStampDutyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function show(StampDuty $stampDuty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function edit(StampDuty $stampDuty)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StampDuty  $stampDuty
     * @return \Illuminate\Http\Response
     */
    public function destroy(StampDuty $stampDuty)
    {
        //
    }
}
