<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\title;

class otherController extends Controller
{
    // title 
    function title() 
    {
        return view('admin.title');
    }
    // insertTitle
    function insertTitle(Request $request)
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

        //whole form insert in db
        $state = title::insert([
    		'title'=>$request-> title,
    		'image'=> $image_url,
    	]); 

    	return back();
    }



    // =======footer==========

    //footer
    function footer() 
    {
        return view('admin.footer');
    }

    // insertFooter
    function insertFooter(Request $request)
    {
        $state = footer::insert([
    		'footer'=>$request-> footer,
    	]); 

    	return back();
    }
}
