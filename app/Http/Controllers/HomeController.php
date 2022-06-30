<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\LandRate;
use App\Models\LandUser;
use Illuminate\Http\Request;
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

        $landRates=LandRate::all();

        return view('admin.index',compact('mylandscount','landscount','landratescount','mylands','landRates'));
    }
}
