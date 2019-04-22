@if(count($errors)>0)

	@foreach($errors->all() as $error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach

@endif

@if(session('success'))

	<div class="alert alert-success">
		<h5 align="center"><i class="fa fa-star"></i><i class="fa fa-star"></i> {{session('success')}} <i class="fa fa-star"></i><i class="fa fa-star"></i></h5>
	</div>

@endif

@if(session('error'))

	<div class="alert alert-danger">
		{{session('error')}}!
	</div>

@endif