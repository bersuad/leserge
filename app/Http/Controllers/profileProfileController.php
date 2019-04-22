<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profilePicture;
use App\User;
use Intervention\Image\ImageManager;
use DB;

class profileProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        // $profile = profilePicture::all();
        $posts = DB::select("select * from posts where user_id= '$user_id' ORDER BY id DESC");
        return view('eng_pages.profile.editPost')->with('posts', $posts);
    }

    // public function index()
    // {
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
    //     return view('eng_pages.profile.createLocation')->with('profile_pictures', $user->profile_pictures);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eng_pages.profile.createProfilePic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'profile_discription' => 'required|max:150',
            'profile_pic' => 'image|nullable|max:1999'
        ]);

        //handling the selected image.
        if ($request->hasFile('profile_pic')) {
            //accepting the file extension with file name
            $filenameWithExt = $request->file('profile_pic')->getClientOriginalName();
            // get file name only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get the ext only
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            //file to store
            $fileNameToSotre = $filename.'_'.time().'.'.$extension;
            //upload the image
            $path = $request->file('profile_pic')->storeAs('public/profile_image', $fileNameToSotre);

        }else{
            $fileNameToSotre = ' ';
        }
        
        //insert the data
        $post = new profilePicture;
        $post->profile_discription= $request->input('profile_discription');
        $post->user_id=auth()->user()->id;
        $post->type=auth()->user()->type;
        $post->profile_pic = $fileNameToSotre;
        $post->save();

        return redirect('/profile')-> with('success', 'you have change your profile successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
