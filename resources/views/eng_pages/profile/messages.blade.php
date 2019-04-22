@extends('layouts.app')
	@section('content')
		
		<div align="right" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #f6f6f6;">
			<br>
			<a href="/profile" target="_blank" class="btn btn-default"><b>_</b></a>
			<a href="/profile" class="btn btn-warning">
				<i class="fa fa-window-close"></i>
			</a>
		</div>
		<hr>
		<div  class="well" style="background-color: white;">
			<div class="row">
				<h5 style="color: black;" align="center"><b>{{ Auth::user()->name }} this are Messages. </b></h5>
				@if(count($posts) > 0)
					@foreach($posts as $pro)
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<a style="color: blue;" href="/profile/{{$pro->sender_name}}/edit">{{$pro->sender_name}} said...</a>
							<hr>
							<article style="color: #666;"><b>{{$pro->messages}}</b></article>
							<br> 
							<p>{{$pro->created_at}}</p>
						</div>
					@endforeach
					@else
					<p>no file</p>
				@endif
			@endsection
