<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\post;
use DB;
use Auth;
use Intervention\Image\ImageManager;
use Image;

class profileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function __construct()
     {
         $this->middleware('auth', ['except' => ['show', 'edit', 'messages', 'TermesOfUse', 'ContactUs']]);
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->load(['posts'=>function($q){$q->orderBy('id','desc')->paginate(10);
    }]);
        return view('eng_pages.profile.profilePage', array('user'=> Auth::user()) )->with('posts', $user->posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $user->load(['posts'=>function($q){$q->orderBy('id','desc')->paginate(12);
    }]);
        return view('eng_pages.profile.singleUserPage')->with('profile', $user->posts);
        // $profile = DB::select("select * from posts where user_id = '$id' ");
        //$posta= Post::where('title', 'example')->get();//selecting data by using where.
        //$post = Post::orderBy('created_at','desc')->take(10)->get(); //get the first ten data in descending order
        // return view('eng_pages.profile.singleUserPage')->with('profile', $profile); 
    }

    public function turn()
    {
        return view('eng_pages.type_phone');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $post= Post::where(['name'=>$name])->orderBy('id','desc')->paginate(8);
        return view('eng_pages.vendor.singleUserVendor')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateName(Request $request)
    {
        if ($request->hasFile('location','phone_number','name')) {
            
            $user = Auth::user();
        }
        $user = Auth::user();
        $user->name= $request->input('name');
        $user->location= $request->input('location');
        $user->phone_number= $request->input('phone_number');
        $user->type= $request->input('type');
        $user->save();

        return redirect('/profile')-> with('success', 'updated successfully.');

        // return view('eng_pages.profile.profilePage', array('user'=> Auth::user()) )->with('posts', $user->posts);
    }

    public function typeadd(Request $request)
    {
        $this->validate($request,[
            'type' => 'required|max:190',
            'phone_number' => 'required|max:190'
        ]);
        if ($request->hasFile('phone_number')) {
            
            $user = Auth::user();
        }

        $user = Auth::user();
        $user->phone_number= $request->input('phone_number');
        $user->type= $request->input('type');
        $user->save();

        return redirect('/profile')-> with('success', 'welcome to leserge.');
    }

public function TermesOfUse()
    {
        //terms of use redirecting
        return view('eng_pages.termes');
    }
public function ContactUs()
    {
        //contact us redirecting
        return view('eng_pages.contactUs');
    }

    public function update(Request $request)
    {
        if ($request->hasFile('profile_pic','profile_discription')) {
            $profile_pic = $request->file('profile_pic');
            $filename = time() . '.' .$profile_pic->getClientOriginalExtension();
            // $path = $request->file('profile_pic')->storeAs('public/profile_image', $filename);
            //Image::make($profile_pic)->resize(300, 300)->save( public_path('/storage/profile_image/' . $filename) );
            Image::make($profile_pic)->resize(null, 350, function($ratio){
                $ratio->aspectRatio();
            })->save( public_path('../../public_html/storage/profile_image/' . $filename) );

            $user = Auth::user();
            if ($user->profile_pic != 'default.jpg') {
                Storage::delete('public/profile_image/'.$user->profile_pic);
            }

            $user->profile_pic = $filename;
            $user->save();
        }
        $user = Auth::user();
        $user->profile_discription= $request->input('profile_discription');
        $user->save();

        return redirect('/profile')-> with('success', 'updated successfully.');

        // return view('eng_pages.profile.profilePage', array('user'=> Auth::user()) )->with('posts', $user->posts);
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
