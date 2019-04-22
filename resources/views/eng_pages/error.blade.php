@extends('layouts.app')

@section('content')
	<div  class="well" style="background-color: white;">
		<div class="row well" style="background-color: #f0f8ff; border: #fff;">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div align="center" id="vhead">
					<h4 style="color: black;">You can search or go through any vendor on the <i>list</i> below.</h4>
				</div>
				<br>
				<form class="form" id="formbox" action="/search" method="GET">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
							<label for="sel1">City:</label>
							<select class="form-control" name="city">
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
						<div class="col-xs-12 col-md-4 col-lg-5 col-sm-4">
							<label for="sel1">Vendor category:</label>
							<select class="form-control" name="type">
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
							</select>
						</div>
						<div class="col-xs-12 col-md-4 col-lg-2 col-sm-4">
							<label for="sel1">&nbsp; </label>
							<button class="btn btn-primary btn-block"><i class="fa fa-search"></i> SEARCH</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 100%; height: 500px;">
			<div style="position: absolute; top:50%; left: 50%; transform: translate(-50%,-50%); width: 350px; min-height: 150px; max-height: 160px; box-sizing: border-box;">
				<h3 style="color: black; margin-left: 150px;" align="center" class="fa fa-newspaper-o fa-4x"></h3>
				<h3 style="color: black;"> the page that you request cant be found.</h3>
			</div>
		</div>
	</div>

@endsection