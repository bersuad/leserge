@extends('layouts.app')

@section('content')
<div class="container-fluid" style="background-color: white;">
<label></label>
	<div class="row">
		<section>
		@include('inc.left')
			<div class="col-lg-6  col-sm-6 col-md-6" >
			@if(count($post) > 0)
				<!-- <div class="row" style="background-color: #f6f6f6; border: 1px solid #ccc; margin-right: 1px;">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-12" align="center">
						<br>
						<img src="/storage/profile_image/{{$post[0]->user->profile_pic}}" id="profilePic">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12" style="border-left: #000 solid 2px; ">
					
						<p><b> {{ $post[0]->user->profile_discription }}</b></p>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-12 col-xs-12" style="margin-left: 5px;">
							<small>Location: <label class="fa fa-map-marker"><b>{{ $post[0]->user->location }}</b></label></small>
						</div>
						<div class="col-lg-12 col-xs-12" style="margin-left: 5px;">
							<small>phone: <label class="fa fa-phone">{{ $post[0]->user->phone_number }}</label></small>
						</div>
					</div>
				</div>
				<h5 align="center">Posts of {{ $post[0]->user->name }}</h5> -->
					@foreach($post as $posts)
					<!-- try not to replace the foreach condition. -->
					<div style="background-color: #f6f6f6; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">
						<hr>
						<h4 style="color: #48D1CC"> <a href="../../profile/{{$posts->user->id}}"> {{$posts->user->name}} </a></h4>
							<p>
								<a href="/posts/{{$posts->id}}">
									<img style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;" src="/storage/posted_image/{{$posts->posted_image}}">
								</a>
							</p>
							<blockquote id="post_contient">
								{{ substr(strip_tags($posts->body),0,40) }}
								@if(strlen(strip_tags($posts->body)) > 40)
									...<a href="/posts/{!! $posts->id !!}"><i style="font-size: 11px;"> Read More</i></a>
								@endif
								
							</blockquote>
							<footer id="indexrow">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label>
											<!-- cahcking wther the user is login or not -->
											@if (Auth::guest())
												<label id="comment"><span class="fa fa-heart unLiked"> </span> ({{ count($posts->likes) }})</label>
											@else
												<label class="unLiked">
													<i class="fa fa-heart {{ $posts->isLiked()?'liked':''}}" onclick="likeIt('{{ $posts->id}}', this)"></i>
												</label> 
												<label>
													({{ count($posts->likes) }})
												</label>

											@endif
										</label>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label>
											 <a href="#"><span class="fa fa-comment"></span> ({{ count($posts->comments)}})</a>
										</label>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
										<label>
											<small class="fa fa-phone">
												<a href="tel:{{$posts->user->phone_number}}">{{$posts->user->phone_number}}</a>
											</small>
										</label>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<label>
											<small class="fa fa-map-marker" style="color: green;"> {{$posts->user->location}}</small>
										</label>
									</div>
								</div>
							</footer>								
						<hr>
						<small>posted in {{$posts->created_at->todatestring()}}</small>
					</div>

					@endforeach

					<div align="center" class="next">
						{{$post->links()}}
					</div>

					@else
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 well" style="width: 100%; height: 500px;">
							<div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
								<h3 style="color: black; margin-left: 150px;" align="center" class="fa fa-newspaper-o fa-4x"></h3>
								<h3 style="color: black;"> No Post To Show.</h3>
							</div>
						</div>
					@endif 
					</div>
			@include('inc.right')
		</sectipn>
	</div>
</div>
@endsection