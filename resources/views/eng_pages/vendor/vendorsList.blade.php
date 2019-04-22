@extends('layouts.app')

@section('content')
	<div  class="well" style="background-color: white;">
		<div class="row well" style="background-color: #f0f8ff; border: #fff;">
			<div class="col-sm-12">
				<div align="center" id="vhead">
					<h4 style="color: black;">You can search or go through any vendor on the <i>list</i> below.</h4>
				</div>
				<br>
				<form class="form" id="formbox" action="/search" method="GET">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
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
						<div class="col-xs-12 col-md-4 col-lg-5 col-sm-4">
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

		<div class="lsv">
		    <div class="row">
		    	<a href="{!! route('listTypeProfile',['type' => 'Car'])!!}" title="CARS">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/wdcar2.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Car</h4>
			    	</div>
		    	</a>

		    	<a href="{!! route('listTypeProfile',['type' => 'Dj (Band)'])!!}" title="BANDS & DJ's">
		    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/wddj.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Dj (Band)</h4>
			    	</div>
		    	</a>

		    	<a href="{!! route('listTypeProfile',['type' => 'Photo And Video'])!!}" title="PHOTO AND VIDEO">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/pwd3.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Photo and Video</h4>
			    	</div>
		    	</a>

		    	<a href="{!! route('listTypeProfile',['type' => 'Spa (Beauty Salon)'])!!}" title="BEAUTY SALON">
		    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/makeup.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Spa (Beauty Salon)</h4>
			    	</div>
			    </a>
		    	
		    </div>

		    <hr>

		    <div class="row">
		    	<a href="{!! route('listTypeProfile',['type' => 'Decoration'])!!}" title="DECORATION">
		    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/decor4.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Decoration</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Clothes (wedding)'])!!}" title="GROOMS AND BRIDAL CLOTHES">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/tux3.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Grooms And Bride Clothes</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Beauty (Spa)'])!!}" title="SPAS">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/spa2.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Spas</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Gift Shop'])!!}" title="GIFT SHOP">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/ring2.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Wedding Gift Shops</h4>
			    	</div>
			    </a>
		    	
		    </div>

		    <hr>

		    <div class="row">

		    	<a href="{!! route('listTypeProfile',['type' => 'Hotel'])!!}" title="HOTELS">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/hotel.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Hotels</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Cake Bakeries'])!!}" title="CAKE BAKERIES">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/cake.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Cake Bakeries</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Wedding Planer'])!!}" title="WEDDING PLANERS">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/planner.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Wedding Planer</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Equipment Rental'])!!}" title="EQUIPMENT RENTALS">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/rental3.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Equipment Rental</h4>
			    	</div>
			    </a>
		    	
		    </div>

		    <hr>

		    <div class="row">

		    	<a href="{!! route('listTypeProfile',['type' => 'Wedding Drinks'])!!}" title="DRINKING COMPANYS">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/drink.jpg"> </p><br>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Wedding Drinks</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Hall'])!!}" title="WEDDING HALL's">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/equi3.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Hall's</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Garden'])!!}" title="WEDDING GARDENS">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/gardn.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Wedding Gardens</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'Travel Agent'])!!}" title="TRAVEL AGENTS">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<p> <img style="width: 100%; height: auto;" src="storage/travel.jpg"> </p>
			    		<h4 style="color: black" align="center"><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Travel Agents</h4>
			    	</div>
			    </a>
		    	
		    </div>
		    <hr>
		    <div class="row">
		    	<div class="col-lg-3 col-md-3 col-sm-3">
		    		
		    	</div>

				<a href="{!! route('listTypeProfile',['type' => 'Invitation Card'])!!}" title="invitation card">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<h4 style="color: black;" align="center"><label style="color: black" class="fa fa-book fa-4x"></label><br><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Invitation Card.</h4>
			    	</div>
			    </a>

			    <a href="{!! route('listTypeProfile',['type' => 'other'])!!}" title="Other wedding lists">
			    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
			    		<h4 style="color: black;" align="center"><label style="color: black" class="fa fa-shopping-basket fa-4x"></label><br><i class="fa fa-bookmark fa-lg" style="color: #48D1CC;"></i> Other wedding Lists</h4>
			    	</div>
			    </a>

		    	<div class="col-lg-3 col-md-3 col-sm-3">
		    		
		    	</div>
		    	
		    </div>

		    <br>
		</div>
	</div>

@endsection