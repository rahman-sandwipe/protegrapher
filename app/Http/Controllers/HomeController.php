<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() : View {
        $settings=Settings::where('id', 1)->first();
        return view('frontends.pages.home', compact('settings'));
    }
}
