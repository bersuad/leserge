@extends('layouts.app')
	@section('content')
	<div style="background-color: #fff; min-height: 570px;">
		<br>
		<label id="goup"></label>
		<label>We Have found {{count($posts)}} campanies.</label>
		<br>
		<div class="row">
			@if(count($posts) > 0)
				@foreach($posts as $search)
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="image" align="center">
						<div style="background-color: white; border-right: #666 solid 2px; border-top: #666 solid 2px; border-left: #666 solid 2px;" align="center">
							<a href="/profile/{{$search->name}}/edit">
					    		<p> 
					    			<h5 style="color: #48D1CC;"><b><big>{{$search->name}}</big></b></h5>
					    			<img src="/storage/profile_image/{{$search->profile_pic}}" title="{{$search->name}}" style="min-width: auto; min-height: 100px; max-height: 140px; max-width: auto;"/> 
					    		</p>
					    		<br>
					    		<div class="row">
					    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					    				<small style="color: #666; font-size: 10px;"><i class="fa fa-bookmark fa-2x"></i><b><i> {{$search->profile_discription}}</i></b></small>
					    				<br>
					    				<small>
					    					<div class="row">
												<div class="col-lg-12">
													<label class="fa fa-map-marker" style="color: green;"><b><small> {{ $search->location }}</small></b></label>
												</div>
												<div class="col-lg-12">
													<label class="fa fa-phone" style="color: blue;"> {{ $search->phone_number }}</label>
												</div>
											</div>
										</small>
					    				<small><small>Click Here For More About {{$search->name}}</small></small>
					    			</div>
					    		</div>
					    		<hr>
					    	</a>
					    </div>
					</div>
				@endforeach
			@else
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 " style="width: 100%; height: 500px;">
				<div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
					<h3 style="color: black; margin-left: 50%;"  align="center" class="fa fa-newspaper-o fa-4x"></h3>
					<h3 style="color: black;"> No Registered Company Found.</h3>
				</div>
			</div>
			@endif
		</div>

	@endsection