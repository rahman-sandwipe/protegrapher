<?php

namespace App\Http\Controllers;

use App\Models\Social;
use App\Models\Settings;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PartialsController extends Controller
{
    public function settings() : View {
        $socials=Social::latest()->get();
        $config=Settings::find(1)->first();
        return view('backends.pages.settings.partialssettings', compact('socials','config'));
    }

    public function configUpdate(Request $request) {
        $getData=Settings::find(1);
        if($getData){

            // ======= update data ======= //
            $data=$request->all();

            if($request->hasFile('web_logo')) {
                $manager = new ImageManager(new Driver());
                $name_gen = hexdec(uniqid()).'.'.$request->file('web_logo')->getClientOriginalExtension();
                $img = $manager->read($request->file('web_logo'));
                $img = $img->resize(300, 70);
                $img->toJpeg(80)->save(base_path('public/uploads/settings/logo_'.$name_gen));
                $save_url = 'uploads/settings/logo_'.$name_gen;
                $data['web_logo']=$save_url;
            } // endif ==========
            if($request->hasFile('web_fevicon')) {
                $fev_manager = new ImageManager(new Driver());
                $fevicon_name = hexdec(uniqid()).'.'.$request->file('web_fevicon')->getClientOriginalExtension();
                $fev_img = $fev_manager->read($request->file('web_fevicon'));
                $fev_img = $fev_img->resize(100, 100);
                $fev_img->toJpeg(80)->save(base_path('public/uploads/settings/fevicon_'.$fevicon_name));
                $save_fevicon = 'uploads/settings/fevicon_'.$fevicon_name;
                $data['web_fevicon']=$save_fevicon;
            } // endif ==========
            
            
            $getData->fill($data)->save();
            return back()->with('success', 'Website config info updated!');
        }else{
            return back()->with('errors','Data not found!');
        }

        // $config = Settings::find(1);
        // if($request->hasFile('thumbnail')) {
        //     $manager = new ImageManager(new Driver());
        //     $name_gen = hexdec(uniqid()).'.'.$request->file('thumbnail')->getClientOriginalExtension();
        //     $img = $manager->read($request->file('thumbnail'));
        //     $img = $img->resize(1200, 630);
        //     $img->toJpeg(80)->save(base_path('public/uploads/news/'.$name_gen));
        //     $save_url = 'uploads/news/'.$name_gen;
        // } // endif ==========
        // $data=$request->all();
        // $data['thumbnail']=$save_url;

        // $config['web_name']      = $request->web_name;
        // $config['web_tagline']   = $request->web_tagline;
        // $config['web_link']      = $request->web_link;
        // $config['web_authors']   = $request->web_authors;
        // $config['web_metatags']  = $request->web_metatags;
        // $config['web_metadesc']  = $request->web_metadesc;
        // $config['web_timezone']  = $request->web_timezone;
        // $config['author_mail']   = $request->author_mail;
        // $config['author_phone']  = $request->author_phone;
        // $config['author_address']= $request->author_address;
        // $config['web_logo']      = $request->web_logo;
        // $config['web_fevicon']   = $request->web_fevicon;
        // $config->save();
        // Settings::where('id', 1)->update($config);
        // return back()->with('success', 'Website config info updated!');
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
