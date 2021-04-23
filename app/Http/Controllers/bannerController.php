<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class bannerController extends Controller
{
    ///banner
    function banner()
    {
        return view('admin.banner');
    }

    // insertBanner
    function insertBanner(Request $request)
    {
    	$request->validate([
    	 	'image' => 'required|mimes:jpg,jpeg,png,JPG',
    	 ]);

    	//image insert
    	$image= $request->file('image'); //('image') is form field name
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/admin/image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);

       //end
 
        //whole form insert into db
        $state = banner::insert([
    		'title1'=>$request-> title1,
            'title2'=>$request-> title2,
            'title3'=>$request-> title3,
    		'image'=> $image_url,
    	]); 

    	return back();
    }
}
