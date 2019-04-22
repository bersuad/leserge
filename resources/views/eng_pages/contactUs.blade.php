@extends('layouts.app')
	@section('content')
	<div style="background-color: white;">
		<label id="goup"></label>
		<div class="row">
			<section>
				@include('inc.left')

				<div class="col-lg-6 col-md-6 col-sm-6" >
				<div class="panel panel-default">
                			<div class="panel-heading">Contact Us</div>

                				<div class="panel-body">
							<h4 align="center" style="color:black;">Contact Us</h4><hr>
							<form action="mailto:bersuadane@gmail.com">
							<label>Name</label><input class="form-control" type="text" name="name" placeholder="Your Name"><br/>
							<label>Email</label><input class="form-control" type="email" name="email" placeholder="Your Email"><br/>
							<textarea style="resize:none;" rows="8" placeholder="Your Message" class="form-control"></textarea>
							<input type="submit" class="btn btn-primary" value="Send">
							</form>
				</div>
				</div>
				</div>
				@include('inc.right')
			</section>
		</div>
	</div>

	@endsection
