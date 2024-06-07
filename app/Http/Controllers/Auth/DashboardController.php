<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('backends.pages.dashboard');
        // return redirect()->route(auth()->user()->type);
    }
}
