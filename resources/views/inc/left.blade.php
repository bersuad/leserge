<div class="col-lg-3 col-md-3 col-sm-3">
	<div class="row" id="sticky">
		<div class="well">
			<label>Vendor category:</label>
			<ul style="list-style: none;">
				<b>
					<li {{{ (Request::is('listType/Photo'.' '.'And'.' '.'Video')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Photo And Video'])!!}"><i style="color: black;" class="fa fa-camera">/<span class="fa fa-video-camera"></span></i> Photo And Videos</a>
					</li>
					<li {{{ (Request::is('listType/Car')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Car'])!!}"><span style="color: black;" class="fa fa-car fa-lg"></span> Wedding Car Rentals</a>
					</li>
					<li {{{ (Request::is('listType/Clothes (Wedding)')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'clothes'])!!}"><span style="color: black;" class="fa fa-black-tie fa-lg"></span> Grooms &#38; Bridal Clothes</a>
					</li>
					<li {{{ (Request::is('listType/Beauty (Spa)')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Beauty (Spa)'])!!}"><span style="color: black;" class="fa fa-bandcamp fa-lg"></span> Beauty (Spa) Salon.</a>
					</li>
					<li {{{ (Request::is('listType/Hall')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Hall'])!!}"><span style="color: black;" class="fa fa-institution fa-lg"></span> Wedding Halls</a>
					</li>
					<li {{{ (Request::is('listType/Equipment'.' '.'Rental')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Equipment Rental'])!!}"><span style="color: black;" class="fa fa-spoon"><i class="fa fa-cutlery"></i></span> Equipment Rental</a>
					</li>
					<li {{{ (Request::is('listType/Gift'.' '.'Shop')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Gift Shop'])!!}"><span style="color: black;" class="fa fa-gift fa-lg"></span> Wedding Gift Shops</a>
					</li>
					<li {{{ (Request::is('listType/Dj (Band)')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Dj (Band)'])!!}"><span style="color: black;" class="fa fa-headphones">/<i class="fa fa-music"></i></span> Dj (Band)</a>
					</li>
					<li {{{ (Request::is('listType/Decoration')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Decoration'])!!}"><span style="color: black;" class="fa fa-cubes fa-lg"></span> Wedding Decoration</a>
					</li>
					<li {{{ (Request::is('listType/Wedding'.' '.'Planer')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Wedding Planer'])!!}"><span class="fa fa-book fa-lg" style="color: black;"></span> Wedding Planer</a>
					</li>
					<li {{{ (Request::is('listType/Hotel')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Hotel'])!!}"><i style="color: black;" class="fa fa-building"> <span class="fa fa-cutlery"></span></i> Hotels</a>
					</li>
					<li {{{ (Request::is('listType/Drinking'.' '.'Company')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Drinking Company'])!!}"><span style="color: black;" class="fa fa-glass fa-lg"></span> Drinking Companys</a>
					</li>
					<li {{{ (Request::is('listType/Cake'.' '.'Bakeries')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Cake Bakeries'])!!}"><span class="fa fa-birthday-cake fa-lg" style="color: black"></span> Cake Bakeries</a>
					</li>
					<li {{{ (Request::is('listType/Wedding'.' '.'Gardens')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Wedding Gardens'])!!}"><span style="color: black" class="fa fa-leaf"><i class="fa fa-pagelines"></i></span> Wedding Garden</a>
					</li>
					<li {{{ (Request::is('listType/Travel'.' '.'Agent')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Travel Agent'])!!}"><span style="color: black" class="fa fa-suitcase"></span> Travel Agents</a>
					</li>
					<li {{{ (Request::is('listType/Invitation'.' '.'Card')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Invitation Card'])!!}"><span style="color: black" class="fa fa-book"></span> Invitation Card</a>
					</li>
					<li {{{ (Request::is('listType/Other'.' '.'Types')? 'class=active' : '') }}}>
						<a href="{!! route('listType',['type' => 'Other Types'])!!}"><span style="color: black" class="fa fa-shopping-bag"></span> Other Vendors</a>
					</li>
				</b>
			</ul>
		</div>
	</div>
</div>