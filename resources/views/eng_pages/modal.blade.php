@extends('layouts.app')

	<div class="well" style="background-color: black; height:750px;">
		<div class="row" style="background: rgba(100,100,100,0.2);">
			<label></label>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" align="center">
				<label></label>
				@if($post->posted_image == " ")
					<img src="/storage/profile_image/{{$post->user->profile_pic}}" style="min-width: auto; min-height: auto; max-height: 550px; max-width: 100%; position: relative;"/>
				@else
					<a href="/posts/{{$post->id}}">
						<img style="min-width: auto; min-height: auto; max-height: 550px; max-width: 100%; position: relative;" src="/storage/posted_image/{{$post->posted_image}}">
					</a>
				@endif
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="background-color: #fff;">

				<!-- Messgaing area -->
				
				@include('inc.messages')
				<h4 style="color: #48D1CC"> <a href="../profile/{{$post->user->id}}"> <b>{{$post->user->name}}</b> </a></h4>
				<div style="max-height: 200px; overflow: auto;">
					<p style="margin-top: 10px;"><b>{{$post->body}}</b></p>
					<br>
				</div>
				<hr>
				<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
					<label>
						<!-- cahcking wther the user is login or not -->
						@if (Auth::guest())
							<label><span class="fa fa-heart unLiked"> </span> ({{ count($post->likes) }})</label>
						@else
							<!-- like posts -->

							<!-- {{ count($post->likes) }} <a href="#" class="like" data-value=" {{$post->id}} ">{!! Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? ' You like ' : ' Like ' : ' Like ' !!}</a>  -->

							<!-- Dislike posts -->

							<!-- <a href="#" class="like" data-value=" {{$post->id}} "> | {!! Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? ' you hate it ' : ' Dislike ' : ' Dislike ' !!}</span></a> -->
							<label class="unLiked"><i class="fa fa-heart {{ $post->isLiked()?'liked':''}}" onclick="likeIt('{{ $post->id}}', this)"></i></label> <label>({{ count($post->likes) }})</label>
						@endif
					</label>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<label>
						<a href="/posts/{{$post->id}}"> <span class="fa fa-comment"></span> ({{count($post->comments)}})</a>
					</label>
				</div>
				@if($post->user->location != "NULL")
					<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-5">
						<label>
							<small class="fa fa-phone">
								<a href="tel:{{$post->user->phone_number}}" style="font-size: 11px;">{{$post->user->phone_number}}</a>
							</small>
						</label>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<label>
							<small class="fa fa-map-marker" style="color: green;"> {{$post->user->location}}</small>
						</label>
					</div>
				@else
					<label></label>
				@endif
			</div>
			<div class="row">
				@if (Auth::guest())
					<div class="col-lg-9">
						<form action="/add_comment" method="POST">
							<input type="hidden" name="fake" value="{{$post->id}}">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
								<input type="text" name="comment" class="form-control" id="comment" required="required">
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</div>
							<div class="col-lg-3">
									<input type="submit" value="comment" class="btn btn-primary btn-block">
							</div>
						</form>
					</div>
				@else
					<div class="col-lg-9">
						<form action="/add_comment" method="POST">
							<input type="hidden" name="fake" value="{{$post->id}}">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
								<input type="text" name="comment" class="form-control">
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							</div>
							<div class="col-lg-3">
									<input type="submit" value="comment" class="btn btn-primary btn-block">
							</div>
						</form>
					</div>
				@endif
				<div class="row" style="max-height: 250px; overflow: auto;">
					<div class="col-lg-12">
						@if(count($post->comments)>0)
						
							@foreach($post->comments as $me)
								<h6><img src="/storage/profile_image/{{ $me->user->profile_pic}}" style="max-width: auto; max-height: 25px; min-width: auto; min-height: 25px; border-radius: 50%;"/><b><a href="../profile/{{$me->user->id}}"> {{ $me->user->name}}</a></b></h6>
								<p><i class="fa fa-comment" style="color: #000;"> {{ $me->comment}}</i></p>
								<br>
							@endforeach

						@else

							@if (!Auth::guest())
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 well" style="width: 90%; height: 200px;">
									<div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
										<h3 style="margin-left: 150px; color: #666;" align="center" class="fa fa-comment fa-4x"></h3>
											<h3 style="color: black;"> {{ Auth::user()->name}} Be The First To Comment !!</h3>
										</div>
									</div>
								</div>
							@else
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 well" style="width: 90%; height: 200px;">
									<div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
										<h3 style="margin-left: 150px; color: #666;" align="center" class="fa fa-comment fa-4x"></h3>
										<h3 style="color: black;"> Be The First To Comment !!</h3>
									</div>
								</div>

							@endif

						@endif
					</div>
				</div>
				<hr>
				</div>
				<br>
				
			</div>
		</div>
	</div>

