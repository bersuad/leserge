<?php

namespace App;

trait LikableTrait{

	public function likes(){
		return $this->morphMany(Like::class,'likable');
	}

	public function likeIt(){
		$like= new like();
		$like->user_id=auth()->user()->id;

		$this->likes()->save($like);

		return $like;
	}

	public function unLikeIt(){
		//$like=Like::find($id);
		$like=$this->likes()->where('user_id', auth()->id())->delete();
	}

	public function isLiked(){
		return !!$this->likes()->where('user_id',auth()->id())->count();
	}
}