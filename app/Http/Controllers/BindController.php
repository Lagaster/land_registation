<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBindRequest;
use App\Http\Requests\UpdateBindRequest;
use App\Models\Bind;
use Illuminate\Support\Facades\Auth;

class BindController extends Controller
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
        //
    }
}
