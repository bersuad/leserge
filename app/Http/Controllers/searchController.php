<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class searchController extends Controller
{
    public function index(Request $request)
    {	
    	// $user_id = auth()->user()->id;
    	$city = $request->input('city');
    	$type = $request->input('type');
        $posts = DB::table('users')->where('location', 'LIKE', '%'.$city.'%')->where('type','LIKE','%'.$type.'%')->get();
        // return view('eng_pages.profile.editPost')->with('posts', $posts);
    	return view('eng_pages.search')->with('posts', $posts);
    }
}
