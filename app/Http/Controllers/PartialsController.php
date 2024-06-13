<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PartialsController extends Controller
{
    public function settings() : View {
        $socials=Social::latest()->get();
        return view('backends.pages.settings.settings', compact('socials'));
    }



    public function socialInsert(Request $request){
        //return $request->input();
        $request->validate([
            'name'=>'required',
            'icon'=>'required',
            'link'=>'required'
        ]);

        //insert data
        $data = new Social;
        $data->name = $request->name;
        $data->icon = $request->icon;
        $data->link = $request->link;
        $status     = $data->save();
        
        if($status){
            return back()->with('success', 'insert success');
        }else{
            return back()->with('fail', 'insert failed');
        }
    }
}
