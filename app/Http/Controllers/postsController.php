<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\post;
use App\like;
use Auth;
use DB;
use Intervention\Image\ImageManager;
use Image;

class postsController extends Controller
{

    public function __construct()
     {
         $this->middleware('auth', ['except' => ['index', 'show']]);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return the view
        $post= Post::orderBy('updated_at','desc')->paginate(12);
        //$posta= Post::where('title', 'example')->get();//selecting data by using where.
        //$post = Post::orderBy('created_at','desc')->take(10)->get(); //get the first ten data in descending order
        return view('eng_pages.posts')->with('post',$post);
        // return view('eng_pages.posts', compact('post', 'posts'));
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
        $this->validate($request,[
            'body' => 'required|max:190',
            'posted_image' => 'image|nullable|max:2500'
        ]);

        //handling the selected image.
        if ($request->hasFile('posted_image')) {
            //accepting the file extension with file name
            $filenameWithExt = $request->file('posted_image')->getClientOriginalName();
            // get file name only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get the ext only
            $extension = $request->file('posted_image')->getClientOriginalExtension();
            //file to store
            $fileNameToSotre = $filename.'_'.time().'.'.$extension;
            //upload the image
            //$path = $request->file('posted_image')->storeAs('public/posted_image', $fileNameToSotre);
            Image::make($request->file('posted_image'))->resize(null, 600, function($ratio){
                $ratio->aspectRatio();
            })->save( public_path('../../public_html/storage/posted_image/' . $fileNameToSotre) );
		
        }else{
            $fileNameToSotre = ' ';
        }
        
        //insert the data
        $post = new Post;
        $post->body= $request->input('body');
        $post->user_id=auth()->user()->id;
        $post->type=auth()->user()->type;
        $post->name=auth()->user()->name;
        $post->posted_image = $fileNameToSotre;
        $post->save();

        return redirect('/posts')-> with('success', 'posted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //fecthing the data from db by using id
        $post = Post::find($id);
        $post->load(['comments'=>function($q){$q->orderBy('id','desc')->paginate(10);
    }]);
        return view('eng_pages.modal')->with('post',$post);
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
        $this->validate($request,[
            'body' => 'required|max:190',
            'posted_image' => 'image|nullable|max:65000'
        ]);

        //handling the selected image.
        if ($request->hasFile('posted_image')) {
            //accepting the file extension with file name
            $filenameWithExt = $request->file('posted_image')->getClientOriginalName();
            // get file name only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get the ext only
            $extension = $request->file('posted_image')->getClientOriginalExtension();
            //file to store
            $fileNameToSotre = $filename.'_'.time().'.'.$extension;
            //upload the image
            Image::make($request->file('posted_image'))->resize(null, 600, function($ratio){
                $ratio->aspectRatio();
            })->save( public_path('../../public_html/storage/posted_image/' . $fileNameToSotre) );

        }
        
        //insert the data
        $post = Post::find($id);
        $post->body= $request->input('body');

        if ($request->hasFile('posted_image')) {
            Storage::delete('public/posted_image/'.$post->posted_image);
            $post->posted_image=$fileNameToSotre;
        }

        $post->save();

        return redirect('/user-profile')-> with('success', 'updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::delete('public/posted_image/'.$post->posted_image);
        $post->delete();
        return redirect('/user-profile')-> with('success', 'Deleted successfully.');
    }

    public function likePost(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if(!$post){
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like){
            $already_like = $like->like;
            $update = true;
            if($already_like == $is_like){
                $like-> delete();
                return null;
            }
        }else{
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if($update){
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }
}
