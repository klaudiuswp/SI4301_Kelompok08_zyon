<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('admin')){
            return view('dashboard_user.dashboard');
        }if(Auth::user()->hasRole('user')){
            return view('dashboard_user.dashboard');
        }
    }
}
