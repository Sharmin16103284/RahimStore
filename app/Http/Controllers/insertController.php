<?php

namespace App\Http\Controllers;
use App\Models\insertModel;
use App\Models\price_range;

use Illuminate\Http\Request;

class insertController extends Controller
{

    function index()
    {

        $viewss = insertModel::all();
        $price_range = price_range::all();
        return view('index',compact('viewss','price_range'));
    }

    //price_range
    function price_range()
    {
        return view('admin/price_range');
    }
    //add_price_range
    function add_price_range(Request $request)
    {
        price_range::insert([
    		'price'=>$request-> price,
    	]);
    	return back();
    }

    


    function insert()
    {
        $price_range = price_range::all();
        return view('admin/insert', compact('price_range'));
    }


    function insert_product(Request $request)
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
       $state = insertModel::insert([
           'name'=>$request-> name, 
           'price'=>$request-> price,
           'price_id'=>$request-> price_id,
           'date'=>$request-> date,
           'image'=> $image_url,
       ]); 

       return back();
    }


    //product list view
    function view_product()
    {
        $lists = insertModel::all();
        return view('admin/view_product',compact('lists'));
    }

    //view edit product page
    function edit_product($pro_id)
    {
        $edits = insertModel::findOrFail($pro_id);
    	return view('admin/edit',compact('edits'));
    }

    //update edit product
    function update_product(Request $request)
    {
    	$old_img = $request->old_image; //taking the old image address
    	//image insert
    	$image= $request->file('image'); //('image') is form field name
        $image_name=hexdec(uniqid());
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/admin/image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name); 

       //end

        unlink($old_img); //deleting old image

        //whole form insert in db
        insertModel::findOrFail($request->id)->update([
    		'name'=>$request-> name,
           'price'=>$request-> price,
           'date'=>$request-> date,
           'image'=> $image_url,
    	]); 

    	return back();
    }

    //hard delete category
    function delete_product($del_id)
    {
        insertModel::findOrFail($del_id)->delete();
    	return back();
    }

    public function priceRange_product($p_id)
    {
        
        $price_range = price_range::all();
        $all_products = insertModel::where('price_id', $p_id)-> get();
        return view('filtered_product', compact('all_products','price_range')); 
    }










}
