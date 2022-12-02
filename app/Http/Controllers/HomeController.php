<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;

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
    public function redirect()
    {
        $role=Auth::user()->role;
        if($role == 'admin'){
            $data = Product::all()->sortByDesc("id");
            return view('admin.home', compact('data'));
        }if($role == 'user'){
            return view('user.home');
        }
    }
    
    
}
