<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\LandRate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreLandRateRequest;
use App\Http\Requests\UpdateLandRateRequest;

class LandRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $landRates=LandRate::all();
        return view('admin.rates.index',compact('landRates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lands=Land::all();
        return view('admin.rates.create',compact('lands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLandRateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandRateRequest $request)
    {
        $data = $request->validated();
        if ($data['file']) {
            # upload valuation file
            $file = $request->file('file')->store('public/landrates' );

            $file =explode('/', $file) ;
            $data['file'] = end($file);
        }

        $data['verified_by']=Auth::user()->id;
        $data['verified_at']=now();
        LandRate::create($data);

        Session::flash('success',"LandRate report created");
        return redirect()->route('landRates.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function show(LandRate $landRate)
    {
        return view('admin.rates.show',compact($landRate));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function edit(LandRate $landRate)
    {
        $lands=Land::all();
        return view('admin.rates.edit',compact('lands','landRate'));
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
        $data = $request->validated();
        if ($data['file']) {
            # upload valuation file
            $file = $request->file('file')->store('public/landrates' );

            $file =explode('/', $file) ;
            $data['file'] = end($file);
        }

        $data['verified_by']=Auth::user()->id;
        $data['verified_at']=now();
        $landRate->update($data);


        return redirect()->route('landRates.index')->with('success','You have succesfully updated this record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandRate  $landRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandRate $landRate)
    {
        $landRate->delete();
    }
}
