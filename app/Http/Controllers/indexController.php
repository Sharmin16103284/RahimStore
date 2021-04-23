<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socialLink;
use App\Models\footer;
use App\Models\contact;
use App\Models\about;
use App\Models\project;
use App\Models\title;
use App\Models\service;
use App\Models\serviceText;
use App\Models\banner;


class indexController extends Controller
{
    // home
    function homepage()
    {
        $socialLists = socialLink::all()->last();
        $footerLists = footer::all()->last();
        $titleLists = title::all()->last();
        $contactLists = contact::all()->last();
        $aboutLists = about::all()->last();
        $projectList = project::all();
        $serviceList = service::all()->take(-4);
        $serviceTexts = serviceText::all()->last();
        $banners = banner::all()->last();

        return view('index',compact('socialLists' , 'footerLists' , 'contactLists' , 'aboutLists' , 'projectList' , 'titleLists' ,'serviceList' , 'serviceTexts' , 'banners'));
    }
}


?>