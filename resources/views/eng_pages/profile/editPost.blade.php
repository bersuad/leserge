@extends('layouts.app')
	@section('content')
		
		<div align="right" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #f6f6f6;">
			<br>
			<a href="/profile" target="_blank" class="btn btn-default"><small><i class="fa fa-window-minimize"></i></small></a>
			<a href="/profile" class="btn btn-danger">
				<i class="fa fa-window-close"></i>
			</a>
		</div>
		<hr>
		<div  class="well" style="background-color: white; min-height: 500px;">
			<div class="row">
				<h5 style="color: black;" align="center"><b>{{ Auth::user()->name }} this are lists of your posts. </b></h5>

				@if(count($posts) > 0)
					@foreach($posts as $post)
					
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="border: #fff8af solid 0.5px;">
				    		<p title="{{$post->body}}" align="center"> 
								@if($post->posted_image == " ")
								<a href="/posts/{{$post->id}}">
									<p>No Image</p>
								</a>
								@else
									<a href="/posts/{{$post->id}}">
										<img style="min-width: auto; min-height: 100px; max-height: 150px; max-width: auto;" src="/storage/posted_image/{{$post->posted_image}}">
									</a>
								@endif
									  
				    		</p>
				    		<hr>
				    		<div class="row">

				    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="left">
				    				<ul style="list-style-type: none;">
										<li class="dropdown">
											<label href="#"  data-toggle="dropdown" class="btn btn-default" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-edit"></i> </label>
											<ul class="dropdown-menu" role="menu" style="background-color: #f0f8ff;">
					                        	{!! Form::open(['action' => ['postsController@update', $post->id], 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
						                        	<li>
						                        		<textarea rows="3" name="body" class="form-control" style="resize: none; min-width: 250px;">{{ $post->body }}</textarea>
													</li>
													<li class="input-group">
														<span class="input-group-addon"><i class="fa fa-camera"></i></span>
														{{Form::file('posted_image', ['class' => 'btn btn-default col-xs-12'])}}
													</li>
													{{Form::hidden('_method', 'PUT')}}
													<li>
														{{Form::submit('update', ['class' => 'btn btn-primary btn-block'])}}
													</li>

												{!! Form::close() !!}
												
											</ul>
										</li>
									</ul>
				    			</div>
				    			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" align="right">
				    				<ul style="list-style-type: none;">
										<li class="dropdown">
											<label href="#"  data-toggle="dropdown" class="btn btn-danger" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-trash-o"></i> </label>
											<ul class="dropdown-menu" role="menu" style="background-color: #f0f8ff;">

						                        {!!Form::open(['action' => ['postsController@destroy', $post->id], 'method' => 'POST']) !!}
						                        {{Form::hidden('_method', 'DELETE')}}
						                        {{Form::submit('Delete',['class' => 'btn btn-danger btn-block'])}}
				    							{!!Form::close()!!}
												
											</ul>
										</li>
									</ul>
									<hr>
				    			</div>

				    		</div>
				    		
				    		
				    	</div>
					    
					@endforeach

			</div>
			@else
				<div style="position: absolute; top:40%; left: 53%; transform: translate(-50%,-50%); width: 450px; height: 0px; box-sizing: border-box;">
					<h3 style="color: black;" class="fa fa-newspaper-o fa-4x"> <small> No Post For Edit.</small></h3>
					<h3 style="color: black;"> </h3>
				</div>
			@endif

		</div>
	@endsection