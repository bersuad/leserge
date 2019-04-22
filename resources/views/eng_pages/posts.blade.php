@extends('layouts.app')
	@section('content')
	<div style="background-color: white;">
		<label id="goup"></label>
		<div class="row">
			<section>
				@include('inc.left')

				<div class="col-lg-6 col-md-6 col-sm-6" >

					<!-- for registered user -->
					@if (!Auth::guest())
						<div align="center" class="well" style="background-color: #f0f8ff;">
							<h4 style="color: black;">Share us yours <i>{{ Auth::user()->name }}</i></h4>
							{!! Form::open(['action' => 'postsController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}

								{{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Do you have something to share '. Auth::user()->name .' ?', 'style'=> 'resize:none;', 'rows'=> '5', 'id'=> 'authUser'])}}
								<div class="row">
									<div class="col-lg-1 col-md-1 col-xs-12 col-sm-4">
										
									</div>
									<div class="col-lg-7 col-md-7 col-sm-4">
										<div class=" input-group">
											<span class="input-group-addon"><i class="fa fa-camera"></i></span>
											{{Form::file('posted_image', ['class' => 'btn btn-default col-xs-12'])}}
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
										{{Form::submit('Post', ['class' => 'btn btn-primary btn-block'])}}
									</div>
								</div>	

							{!! Form::close() !!}
						</div>
						<hr>
						@if(count($post) > 0)
							@foreach($post as $posts)
							<!-- try not to replace the foreach condition. -->
							<div style="background-color: #f6f6f6; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">
								<hr>
								<h4 style="color: #48D1CC"> <a href="profile/{{$posts->user->id}}"> {{$posts->user->name}} </a></h4>
								<article>
									<p>
										@if($posts->posted_image == " ")
										<a href="/posts/{{$posts->id}}">
											<img src="/storage/profile_image/{{$posts->user->profile_pic}}" style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;"/>
										</a>
										@else
											<a href="/posts/{{$posts->id}}">
												<img style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;" src="/storage/posted_image/{{$posts->posted_image}}">
											</a>
										@endif
									 </p>
									<blockquote id="post_contient">
										{{ substr(strip_tags($posts->body),0,40) }}
										@if(strlen(strip_tags($posts->body)) > 40)
											...<a href="/posts/{!! $posts->id !!}"><i style="font-size: 11px;"> Read More</i></a>
										@endif
										
									</blockquote>
								</article>
								<footer id="indexrow">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<label>
												<label class="unLiked"><i class="fa fa-heart {{ $posts->isLiked()?'liked':''}}" onclick="likeIt('{{ $posts->id}}', this)"></i></label> <label>({{ count($posts->likes) }})</label>
											</label>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<label>
												{{count($posts->comments)}} <a href="/posts/{{$posts->id}}"><span class="fa fa-comment"></span><small></small></a>
											</label>
										</div>
										@if($posts->user->location != "NULL")
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-6">
												<label>
													<small class="fa fa-phone">
														<a href="tel:{{$posts->user->phone_number}}">{{$posts->user->phone_number}}</a>
													</small>
												</label>
											</div>
											<div class="col-lg-3 col-md-3 col-xs-12">
												<label>
													<small class="fa fa-map-marker" style="color: green;"> {{$posts->user->location}}</small>
												</label>
											</div>
										@else
											<label></label>
										@endif
									</div>
								</footer>								
								<hr>
								<small>posted in {{ date('Y, F d', strtotime($posts->updated_at->todatestring() )) }} at {{ date('h:i a', strtotime($posts->updated_at)) }}</small>
							</div>

							@endforeach
								<!-- trying to rich the max count -->
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

					<!-- for non-registered user		 -->
					@else

						@if(count($post) > 0)
							@foreach($post as $posts)
							<!-- try not to replace the foreach condition. -->
							<div style="background-color: #f6f6f6; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">
								<hr>
								<h4 style="color: #48D1CC"> 
									<a href="profile/{{$posts->user->id}}"> {{$posts->user->name}} </a>
								</h4>
									<p>
										@if($posts->posted_image == " ")
										<a href="/posts/{{$posts->id}}">
											<img src="/storage/profile_image/{{$posts->user->profile_pic}}" style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;"/>
										</a>
										@else
											<a href="/posts/{{$posts->id}}">
												<img style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;" src="/storage/posted_image/{{$posts->posted_image}}">
											</a>
										@endif
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
											<label id="comment"><span class="fa fa-heart unLiked"> </span> ({{ count($posts->likes) }})</label>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
											<label>
												{{count($posts->comments)}} <a href="/posts/{{$posts->id}}"><span class="fa fa-comment"></span></a>
											</label>
										</div>
										@if($posts->user->location != "NULL")
											<div class=" col-lg-3 col-md-3 col-sm-3 col-xs-6">
												<label>
													<small class="fa fa-phone">
														<a href="tel:{{$posts->user->phone_number}}">{{$posts->user->phone_number}}</a>
													</small>
												</label>
											</div>
											<div class="col-lg-3 col-md-3 col-xs-12">
												<label>
													<small class="fa fa-map-marker" style="color: green;"> {{$posts->user->location}}</small>
												</label>
											</div>
										@else
											<label></label>
										@endif
									</div>
								</footer>								
								<hr>
								<small>posted in {{ date('Y, F d', strtotime($posts->updated_at->todatestring() )) }} at {{ date('h:i a', strtotime($posts->updated_at)) }}</small>
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

					@endif

				</div>
				@include('inc.right')
			</section>
		</div>
		<a href="#goup" class="btn btn-default" id="postbtn"><label class="fa fa-arrow-up" style="color:#666"></label></a>
	</div>

	@endsection
