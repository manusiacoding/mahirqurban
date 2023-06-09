<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        if($request->user()->hasRole('Super Admin')){
            return redirect()->route('dashboard.index');
        }
        if($request->user()->hasRole('Admin')){
            return redirect()->route('dashboard.index');
        }
        // else if($request->user()->hasRole('User') && $request->user()->country == "Indonesia"){
        //     $productIndo = Product::where('country', 'Indonesia')->get();
        //     return view('landing.indo.home', compact(['productIndo']));
        // }
        else if($request->user()->hasRole('User') && $request->user()->country == "Malaysia"){
            $productMalaysia = Product::where('country', 'Malaysia')->get();
            return view('landing.malaysia.home', compact(['productMalaysia']));
        }
        else if($request->user()->hasRole('User') && $request->user()->country == "Brunei Darussalam"){
            $product = Product::where('country', 'Brunei Darussalam')->get();
            return view('landing.brunei.home', compact(['product']));
        }
    }
}
