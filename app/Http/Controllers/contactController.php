<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    //addContact
    function addContact()
    {
        return view('admin.contact');
    }
    // insertContact
    function insertContact(Request $request)
    {
        $state = contact::insert([
    		'phone1'=>$request-> phone1,
            'phone2'=>$request-> phone2,
    		'email'=>$request-> email,
            'address'=>$request-> address,
    	]); 

    	return back();
    }

    // contactList
    function contactList()
    { 
        $contactLists = contact::all();
        return view('admin.contactList',compact('contactLists'));
    }

    // deleteContact
    function deleteContact($id)
    {
    	contact::findOrFail($id)->delete();
    	return back();
    }





}
 