@extends('layouts.app')

@section('content')
<div style="background-color: white;">
	<label></label>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 well" style="background-color: #f0f8ff;">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-6">
						<h5 align="center"><b>Profile Picture.</b></h5>
						<img src="storage/profile_image/{{$user->profile_pic}}" id="profilePic">
					</div>
					<div class="col-lg-12 col-md-12 col-xs-6">
						<article>
							<h5 align="center"><u><b>Profile Discription.</b></u></h5>
					<p id="profileDisc" align="center">
						{{ $user->profile_discription }}
					</p>
						</article>
					</div>
				</div>
				<br>
				<h5 style="color: black;" align="center"><i style="color: #356789;"></i> <b class="fa fa-cogs" style="font-size: 18px;"> Settings</b></h5>
				<ul style="list-style-type: none; margin-top: 5px;">
					<li class="dropdown">
						@if(Auth::user()->location != "NULL")
						<p><i class="fa fa-map-marker fa-lg" style="color: #48DD00;"></i><b style="color: black;"> Edit Your Location &#38; Profile.</b></p>
						<label href="#"  data-toggle="dropdown" class="btn btn-primary btn-block" data-toggle="dropdown" aria-expanded="false"><small style="font-size: 11px; margin-top: 6px;"> Change Your Name/ Location/ Phone Number.</small></label>
							<ul class="dropdown-menu" role="menu" style="background-color: #f0f8ff;">

		                        <form enctype="multipart/form-data" action="/change_update" method="POST">
		                        	<li class="input-group">
		                        		<span class="input-group-addon"><small>Name</small></span>
		                        		<input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control">
									</li>
									<li class="input-group">
		                        		<span class="input-group-addon"><small><i class="fa fa-phone"></i> N<sup><u>o</u></sup></small></span>
		                        		<input type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" class="form-control">
									</li>
									<li class="input-group">
										<span class="input-group-addon"><i class="fa fa-list"></i></span>
										<select class="form-control" name="type">
											<option> {{ Auth::user()->type }}</option>
											<option>Beauty (Spa)</option>
											<option>Car</option>
											<option>Cake Bakeries</option>
											<option>Clothes (Wedding)</option>
											<option>Decoration</option>
											<option>Dj (Band)</option>
											<option>Equipment Rental</option>
											<option>Gift Shop</option>
											<option>Invitation Card</option>
											<option>Hall</option>
											<option>Hotel</option>
											<option>Photo And Video</option>
											<option>Travel Agent</option>
											<option>Wedding Gardens</option>
											<option>Wedding Drinks</option>
											<option>Wedding Planer</option>
											<option>Other Types</option>
										</select>
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									</li>
									<li class="input-group">
		                        		<span class="input-group-addon"><small><i class="fa fa-map-marker"></i> Address</small></span>
		                        		<input type="text" name="location" value="{{ Auth::user()->location }}" class="form-control">
		                        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
									</li>
									<li>
										<input type="submit" name="change profile" value="Change Profile" class="btn btn-primary">
									</li>

								</form>
								
							</ul>
						@else
							<label></label>
						@endif
						
					</li>
				</ul>
				<ul style="list-style-type: none;">
					<li class="dropdown" style="margin-top: 5px;">
						<p><b class="fa fa-list-alt fa-lg" style="color: #4b0082;"></b><b style="color: black;"> Discribe Your Self here.</b></p>
						<label href="#"  data-toggle="dropdown" class="btn btn-primary btn-block" data-toggle="dropdown" aria-expanded="false"> Change Profile Picture &#38; Discription. </label>
						<ul class="dropdown-menu" role="menu" style="background-color: #f0f8ff;">

	                        <form enctype="multipart/form-data" action="/profile_update" method="POST">
	                        	<li>
	                        		<textarea name="profile_discription" class="form-control" style="resize: none;" rows="4">{{ Auth::user()->profile_discription }}
	                        		</textarea>
								</li>
								<li class="input-group">
									<span class="input-group-addon"><img src="storage/profile_image/{{ Auth::user()->profile_pic}}" style="min-height: 25px; min-width: auto; max-width: : auto; max-height: 25px; border-radius: 15%;"/></span>
									<input type="file" name="profile_pic" class="btn btn-default col-xs-12">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</li>
								<li>
									
									<input type="submit" name="change profile" value="Update profile" class="btn btn-primary">
								</li>

							</form>
							
						</ul>
					</li>
					<li style="margin-top: 5px;">
						<p><i class="fa fa-edit fa-lg" style="color: #1e90ff"></i> <b style="color: black;">Edit Images Here.</b></p>
						<a href="/user-profile"><label class="btn btn-primary btn-block">Edit Your Posts.</label></a>
					</li>
				</ul>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6" >
				<div align="center" class="well" style="background-color: #f0f8ff;">
					<h4 style="color: black;">Share us yours <i>{{ Auth::user()->name }}</i></h4>
					{!! Form::open(['action' => 'postsController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}

						{{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Do you have something to share?', 'style'=> 'resize:none;', 'rows'=> '5'])}}
						<div class="row">
							<div class="col-lg-1 col-md-1 col-sm-1">
								
							</div>
							<div class="col-lg-7 col-md-7 col-sm-6">
								<div class=" input-group">
									<span class="input-group-addon"><i class="fa fa-camera"></i></span>
									{{Form::file('posted_image', ['class' => 'btn btn-default col-xs-12'])}}
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-5">
								{{Form::submit('Post', ['class' => 'btn btn-primary btn-block'])}}
							</div>
						</div>

					{!! Form::close() !!}
				</div>
				<hr>
			    <small><p align="center" style="font-size: 10px;"> {{ Auth::user()->name }} this are lists of your posts. </p></small>
			   @if(count($posts) > 0)
				    @foreach($posts as $post)
				    	
				    	<div style="background-color: #f0f8ff; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">
				    		<hr>
							<h4 style="color: #48D1CC"> <a href="profile"> {{$post->user->name}}</a></h4>
							<p>
								@if($post->posted_image == " ")
								<a href="/posts/{{$post->id}}">
									<img src="/storage/profile_image/{{$post->user->profile_pic}}" style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;"/>
								</a>
								@else
									<a href="/posts/{{$post->id}}">
										<img style="min-width: auto; min-height: auto; max-height: 400px; max-width: 95%; margin-left: 12px;" src="/storage/posted_image/{{$post->posted_image}}">
									</a>
								@endif
							 </p>
							<blockquote id="post_contient">
								{{ substr(strip_tags($post->body),0,40) }}
								@if(strlen(strip_tags($post->body)) > 40)
									...<a href="/posts/{!! $post->id !!}"><i style="font-size: 11px;"> Read More</i></a>
								@endif
							</blockquote>
							<footer id="indexrow">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
										<label>
											<!-- cahcking wther the user is login or not -->
											@if (Auth::guest())
												<label id="comment"><span class="fa fa-heart unLiked"> </span> ({{ count($post->likes) }})</label>
											@else
												<label class="unLiked">
													<i class="fa fa-heart {{ $post->isLiked()?'liked':''}}" onclick="likeIt('{{ $post->id}}', this)"></i>
												</label> 
												<label>
													({{ count($post->likes) }})
												</label>

											@endif
										</label>				
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
										<label>
											<a href="/posts/{{$post->id}}"><span class="fa fa-comment"></span> ({{ count($post->comments)}})</a><small>Comments</small>
										</label>
									</div>
									@if(Auth::user()->location != "NULL")
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
											<label>
												<small class="fa fa-phone">
													<a href="tel:{{$post->user->phone_number}}">{{$post->user->phone_number}}</a>
												</small>
											</label>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
											<label>
												<small class="fa fa-map-marker" style="color: green;"> {{$post->user->location}}</small>
											</label>
										</div>
									@else
										<label></label>
									@endif
								</div>
							</footer>								
							<hr>
							<small>posted in {{$post->created_at}}</small>
						</div>

				    @endforeach

				    <!-- pagenation place -->

				@else
				<div style="position: absolute; top:120%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
					<br>
					<h3 style="color: black; margin-left: 150px;" align="center" class="fa fa-newspaper-o fa-4x"></h3>
					<h3 style="color: black;"> No Post To Show.</h3>
				</div>
				@endif

			</div>
			
		<div class="col-lg-3 col-md-3 col-sm-3 well" style="background-color: #f0f8ff;" id="leftProfile">
			<h5 align="center" for="sel1"><i class="fa fa-envelope-o fa-2x" style="color: #1e90ff"></i> Message</h5>
			<div class="row" style="min-height: 300px; max-height: 400px; overflow: auto;">
				@if(count($user->messages)>0)
					@foreach($user->messages->reverse() as $me)
						<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
							<a href="/profile/{{$me->sender_name}}/edit">{{$me->sender_name}}</a>
							<p><i class="fa fa-envelope-open" style="color: #1e90ff"></i> {{$me->messages}}</p>
							<small>{{$me->replay}}</small>
							<hr>
						</div>
					@endforeach
				@else
					<div class="col-lg-12 col-xs-12 col-md-12 col-sm-12">
						<div style="position: absolute; top:100px; left: 60%; transform: translate(-50%,-50%); width: 200px; height: 0px; box-sizing: border-box;">
							<p style="color: black;"><i class="fa fa-envelope-open-o fa-2x"></i> You have no message.</p>
						</div>
					</div>
				@endif
			</div>
		</div>
		
	</div>
</div>
			    

@endsection