<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //resiving request from web.php router for index page
    public function index(){
    	return view ('eng_pages.index');
    }

    //resiving request from web.php router for posts page
    public function posts(){
    	return view ('eng_pages.posts');
    }

    //resiving request from web.php router for profile page
    public function profilePage(){
    	return view ('eng_pages.profile.profilePage');
    }

    //resiving request from web.php router for profile page
    public function singleUserView(){
    	return view ('eng_pages.profile.singleUserPage');
    }

    public function singleVendorView(){
    	return view ('eng_pages.vendor.vendorsList');
    }

    public function listVendor(){
    	return view ('eng_pages.vendor.singleVendorPage');
    }

}
