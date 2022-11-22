<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\LandRate;
use App\Models\LandUser;
use Illuminate\Http\Request;
use App\Models\ValuationReport;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $mylandscount = LandUser::with('land')->whereBelongsTo($user,'owner')
        ->where('is_owner',true)
        ->count();
        $landscount = Land::count();
        $landratescount = LandRate::count();
        $mylands = LandUser::with('land')->whereBelongsTo($user,'owner')
        ->where('is_owner',true)
        ->get();

        

        // my land rates
        $mylandsIds = $mylands->pluck('land_id');
        if($user->isUser()){
            $landRates = LandRate::whereIn('land_id',$mylandsIds)->get();
        }{
            $landRates=LandRate::all();
        }




        $valuationReportCount =  ValuationReport::count();

        return view('admin.index',compact('mylandscount','landscount','landratescount','mylands','landRates','valuationReportCount'));
    }
}
