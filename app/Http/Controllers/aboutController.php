<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutController extends Controller
{
    // addAbout
    function addAbout()
    {
        return view('admin.about');
    }

    // insertAbout
    function insertAbout(Request $request)
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
        $state = about::insert([
            'name'=>$request-> name,
            'description'=>$request-> description,
            'image'=> $image_url,
        ]); 

        return back();
    }

    // aboutList
    function aboutList()
    {
        $aboutLists = about::all();
        return view('admin.aboutList',compact('aboutLists'));
    }

    // deleteAbout
    function deleteAbout($id)
    {
        about::findOrFail($id)->delete();
        return back();
    }



}

