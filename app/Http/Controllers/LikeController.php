<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\post;

class LikeController extends Controller
{
    public function toggleLike(){
    	$postId= Input::get('postId');
    	$post= post::find($postId);

    	//$usersLike= $post->likes()->where('user_id', auth()->id())->where('post_id', $postId)->first();

    	if (!$post->isLiked()) {
    		$post->likeIt();
    		return response()->json(['message'=>'liked']);
    	}else{
    		$post->unLikeIt();
    		return response()->json(['message'=>'unliked']);
    	}

    }
}
