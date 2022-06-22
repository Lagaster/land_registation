<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValuationReportRequest;
use App\Http\Requests\UpdateValuationReportRequest;
use App\Models\ValuationReport;

class ValuationReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valuations = ValuationReport::all();

        return view('admin.valuations.index',compact('valuations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.valuations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreValuationReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValuationReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ValuationReport  $valuationReport
     * @return \Illuminate\Http\Response
     */
    public function show(ValuationReport $valuationReport)
    {
        return view('admin.valuations.show',compact('$valuationReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ValuationReport  $valuationReport
     * @return \Illuminate\Http\Response
     */
    public function edit(ValuationReport $valuationReport)
    {
        return view('admin.valuations.edit',compact('$valuationReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValuationReportRequest  $request
     * @param  \App\Models\ValuationReport  $valuationReport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValuationReportRequest $request, ValuationReport $valuationReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ValuationReport  $valuationReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(ValuationReport $valuationReport)
    {
        $valuationReport->delete();
        

    }
}
