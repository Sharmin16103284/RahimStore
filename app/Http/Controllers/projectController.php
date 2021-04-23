<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class projectController extends Controller
{
    //addProject
    function addProject()
    {
        return view('admin.project');
    }

    // insertProject
    function insertProject(Request $request)
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
        $state = project::insert([
    		'headline'=>$request-> headline,
    		'title'=>$request-> title,
    		'description'=>$request-> description,
    		'image'=> $image_url,
    	]); 

    	return back();
    }

    // projectList
    function projectList()
    {
        $projectList = project::all();
        return view('admin.projectList',compact('projectList'));
    }

    //hard delete project
    function deleteProject($id)
    {
    	project::findOrFail($id)->delete();
    	return back();
    }










}
