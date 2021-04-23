<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\employee;

class employeeController extends Controller
{
    //add_category
    function add_category()
    {
    	return view('admin\add_category');
    }
    //insert_category
    function insert_cat(Request $request)
    {
    	category::insert([
    		'category'=>$request-> category,
    	]);
    	return back();
    }

    //view category
    function view_category(){
    	$view_cats = category::all();
    	return view('admin\view_category', compact('view_cats'));
    }

    //hard delete category
    function del_cat($cat_id)
    {
    	category::findOrFail($cat_id)->delete();
    	return back();
    }

    //add_employee blade
    function add_employee()
    {
    	$categories = category::all();
    	return view('admin/add_employee',compact('categories'));
    }
    //insert into add_employee
    function insert_employee(Request $request)
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
        $state = employee::insert([
        'date'=>$request-> date,
    		'name'=>$request-> name,
    		'category_id'=>$request-> category_id,
    		'nid'=>$request-> nid,
    		'address'=>$request-> address,
    		'number'=>$request-> number,
    		'blood_group'=>$request-> blood_group,
        'salary'=>$request-> salary,
    		'image'=> $image_url,
        
        
    	]); 

    	return back();
    }

    //employee_list blade
    function employee_list()
    {
    	$lists = employee::all();
    	return view('admin/employee_list',compact('lists'));
    }
    //edit_employee blade 
    function edit_employee($Emp_id)
    {
    	$cats = category::all();
    	$edits = employee::findOrFail($Emp_id);
    	return view('admin/edit_employee',compact('cats','edits'));
    }

    //update edit_employee
    function update_employee(Request $request)
    {
    	
        //whole form insert in db
        employee::findOrFail($request->id)->update([
          'date'=>$request-> date,
          'name'=>$request-> name,
          'category_id'=>$request-> category_id,
          'nid'=>$request-> nid,
          'address'=>$request-> address,
          'number'=>$request-> number,
          'blood_group'=>$request-> blood_group,
          'salary'=>$request-> salary,
          // 'image'=> $image_url,
    	]); 

    	return back();
    }
    //view_employee blade
    function view_employee($e_id)
    {
    	$viewss = employee::findOrFail($e_id);
    	return view('admin\view_employee',compact('viewss'));
    }
    

    // soft delete employee
    function trashEmployee($id)
    {
      employee::findOrFail($id)->delete();
    	return back();
    }

    // former
    function former()
    {
    	$formerLists = employee::onlyTrashed()->get();
    	return view('admin.former',compact('formerLists'));
    }


    //end
}
