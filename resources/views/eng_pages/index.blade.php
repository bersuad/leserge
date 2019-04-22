@extends('layouts.app')

		<div class="jumbotron" style="background: url(storage/wdf.jpg); background-size: cover;">
			<div class="container formlike">
				<h3><b>STOP <i>STRESSING</i> AND</b></h3>
				<h1> Start planning your <i>wedding</i> here.</h1>
				<form class="form" action="/search" method="GET">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
							<label for="sel1">City:</label>
							<select class="form-control" name="city">
								<option value="Addis Ababa">-- Select Your City --</option>
								<option>Adama (Nazret)</option>
								<option>Addis Ababa</option>
								<option>Bahirdar</option>
								<option>Bishoftu (Debre Zeit)</option>
								<option>Dessie</option>
								<option>Dire Dawa</option>
								<option>Gonder</option>
								<option>Hawassa</option>
								<option>Jimma</option>
								<option>Mekelle</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
							<label for="sel1">Vendor category:</label>
							<select class="form-control" name="type">
								<option value="Car">-- Select a Vendor --</option>
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
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
							<label for="sel1">For more goto vendors </label>
							<button class="btn btn-primary btn-block"><i class="fa fa-search"></i> SEARCH</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div id="indexstyle">
		<div class="container-fluid" style="background-color: white;">
			<section>
				<div class="page-header">
					<h4 style="color: black;" align="center" id="goup">New posts</h4>
				</div>
				<div class="row">
					@include('inc.left')
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<!-- fetching data from posts table -->
						@if(count($posts) > 0)
							@foreach($posts->reverse() as $post)
								<div style="background-color: #f6f6f6; border-bottom: 1px solid #ccc; border-left: 1px solid #ccc;">
									<hr>
									<h4 style="color: #48D1CC"> <a href="profile/{{$post->user->id}}"> {{$post->user->name}} </a></h4>
										<p>
											@if($post->posted_image == " ")
												<a href="/posts/{{$post->id}}">
													<img src="/storage/profile_image/{{$post->user->profile_pic}}" style="min-width: auto; min-height: auto; max-height: 300px; max-width: 100%;"/>
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
													<div class="col-lg-3 col-md-3 col-xs-3">
														<label>
															<!-- cahcking wther the user is login or not -->
															@if (Auth::guest())
																<label id="comment"><span class="fa fa-heart unLiked"> </span> ({{ count($post->likes) }})</label>
															@else
																<label class="unLiked"><i class="fa fa-heart {{ $post->isLiked()?'liked':''}}" onclick="likeIt('{{ $post->id}}', this)"></i></label> <label>({{ count($post->likes) }})</label>

															@endif
														</label>
													</div>
													<div class="col-lg-3 col-md-3 col-xs-3">
														<label>
															<a href="/posts/{{$post->id}}"><span class="fa fa-comment"></span> ({{count($post->comments)}})</a>
															@if(count($post->comments) > 1)
																<small id="commentnew" style="font-size: 10px;">comments</small>
															@else
																<smalln id="commentnew" style="font-size: 10px;">Comment</small>
															@endif
														</label>
													</div>
													@if($post->user->location != "NULL")
														<div class="col-lg-3 col-md-3  col-xs-6">
															<label>
																<span class="fa fa-phone">
																	<a href="tel:{{$post->user->phone_number}}"> {{$post->user->phone_number}}</a>
																</span>
															</label>
														</div>
														<div class="col-lg-3 col-md-3 col-xs-12">
															<label>
																<span class="fa fa-map-marker" style="color: green;"> {{$post->user->location}}</span>
															</label>
														</div>
													@else
														<label></label>
													@endif
												</div>
											</footer>
									<hr>
									
										<small>&nbsp; posted in {{ date('Y, F d', strtotime($post->updated_at->todatestring() )) }} at {{ date('h:i a', strtotime($post->updated_at)) }}</small>
									
									<br>
								</div>



							@endforeach

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
				</section>
			</div>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="indexbtn">
						<a href="#goup" class="btn btn-default">
							<label class="fa fa-arrow-up" style="color:#666"></label>
						</a>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						
					</div>
					<div align="right" class="next col-lg-6 col-md-3 col-sm-3">
						<a href="/posts" class="btn btn-primary" id="shbtn">
							 Show More <i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i> 
						</a>
					</div>
				</div>
			</div>

	</div>

