<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socialLink;

class socialController extends Controller
{
    //addSocial
    function addSocial() 
    {
        return view('admin.social');
    }

    // insertSocial
    function insertSocial(Request $request)
    {
        $state = socialLink::insert([
    		'facebook'=>$request-> facebook,
            'linkedin'=>$request-> linkedin,
    		'twitter'=>$request-> twitter,
            'github'=>$request-> github,
    	]); 

    	return back();
    }

    // socialList
    function socialList()
    {
        $socialLists = socialLink::all();
        return view('admin.socialList', compact('socialLists'));
    }

    // deleteSocial
    function deleteSocial($id)
    {
    	socialLink::findOrFail($id)->delete();
    	return back();
    }






}
 