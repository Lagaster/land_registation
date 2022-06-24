<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\ValuationReport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreValuationReportRequest;
use App\Http\Requests\UpdateValuationReportRequest;

class ValuationReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valuationReports = ValuationReport::all();

        return view('admin.valuations.index',compact('valuationReports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lands = Land::all();
        return view('admin.valuations.create',compact('lands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreValuationReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValuationReportRequest $request)
    {
        $data = $request->validated();
        if ($data['file']) {
            # upload valuation file
            $file = $request->file('file')->store('public/valuations' );

            $file =explode('/', $file) ;
            $data['file'] = end($file);
        }

        $data['verified_by']=Auth::user()->id;
        $data['verified_at']=now();
        $data['total']=$data['land'] + $data['improvement'];
        ValuationReport::create($data);

        Session::flash('success',"Valuation report created");
        return redirect()->route('valuationReports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ValuationReport  $valuationReport
     * @return \Illuminate\Http\Response
     */
    public function show(ValuationReport $valuationReport)
    {
        return view('admin.valuations.show',compact('valuationReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ValuationReport  $valuationReport
     * @return \Illuminate\Http\Response
     */
    public function edit(ValuationReport $valuationReport)
    {
        $lands = Land::all();
        return view('admin.valuations.edit',compact('valuationReport','lands'));
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
        $data = $request->validated();
        if ($data['file']) {
            # upload valuation file
            $file = $request->file('file')->store('public/valuations' );

            $file =explode('/', $file) ;
            $data['file'] = end($file);
        }

        $data['verified_by']=Auth::user()->id;
        $data['verified_at']=now();
        $data['total']=$data['land'] + $data['improvement'];
        $ValuationReport->update($data);

        Session::flash('success',"Valuation report created");
        return redirect()->route('valuationReports.index');
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

        Session::flash('success',"Valuation report deleted successfully");
        return redirect()->route('valuationReports.index');

    }
}
