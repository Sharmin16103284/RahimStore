<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\service;
use App\Models\serviceText;

class serviceController extends Controller
{
    //service
    function service()
    {
        return view('admin.service');
    }
    // insertService
    function insertService(Request $request)
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
        $state = service::insert([
    		'title'=>$request-> title,
    		'description'=>$request-> description,
    		'image'=> $image_url,
    	]); 

    	return back();
    }

    // serviceList
    function serviceList()
    {
        $serviceList = service::all();
        return view('admin.serviceList',compact('serviceList'));
    }

    //hard delete deleteService
    function deleteService($id) 
    {
    	service::findOrFail($id)->delete();
    	return back();
    }



    // serviceText
    function serviceText()
    {
        return view('admin.serviceText');
    }

     // insertServiceText
     function insertServiceText(Request $request)
     {
         $state = serviceText::insert([
             'details'=>$request-> details,
         ]); 
 
         return back();
     }





}
 