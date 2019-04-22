<footer class="footer" style="background-color:#f5fffa;" id="footer">
        <div class="container">
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-lg-3 col-md-3 col-sm-3" id="fabout">
                    <label><b>ABOUT.</b></label><b><br/>
		    <i class="fa fa-caret-right"></i>
                    <a href="/terms-of-use">Terms of Use</a>
                    <br>
		    <i class="fa fa-caret-right"></i>
                    <a href="/contact-us">Contact Us</a>
                    <br>
                </div>
                <div class="col-lg-6 col-md-6" id="flist">
                    <label><b>LIST OF VENDORS COMPANYS.</b></label>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul style="list-style: none;">
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Photo and Video'])!!}"> 
                                        Wedding Photo And Video
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Car'])!!}"> Wedding Car Rental</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Clothes (Wedding)'])!!}"> Wedding Dresses</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Beauty (Spa)'])!!}"> Spa And Beauty Salons</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Hall'])!!}"> Wedding Halls</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Equipment Rental'])!!}"> Wedding Equipment Rental</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Gift Shop'])!!}"> Wedding Gift Shops</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Invetation Card'])!!}"> Invetation Card</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul style="list-style: none;">
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Dj (Band)'])!!}"> Wedding Band AND DJ</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'decoration'])!!}"> Wedding Decoration</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Planer'])!!}"> Wedding Planer</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'Hotel'])!!}"> Hotels</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'drink company'])!!}"> Drinking Companys</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'cake'])!!}"> Wedding Cake Bakeries</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'garden'])!!}"> Wedding Gardens</a>
                                </li>
                                <li>
                                    <i class="fa fa-caret-right"></i>
                                    <a href="{!! route('listType',['type' => 'other'])!!}"> Other Lists</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container" id="fsearch">
                    <form class="form" action="/search" method="GET">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
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
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <label for="sel1">Vendor category:</label>
                                <select class="form-control" name="type">
                                    <option>Beauty (Spa)</option>
                                    <option>Car</option>
                                    <option>Cake Bakeris</option>
                                    <option>Clothes (Wedding)</option>
                                    <option>Decoration</option>
                                    <option>Dj (Band)</option>
                                    <option>Drinks for Wedding</option>
                                    <option>Equipment Rental</option>
                                    <option>Gift Shop</option>
                                    <option>Hall</option>
                                    <option>Hotel</option>
                                    <option>Photo And Video</option>
                                    <option>Planer (Wedding)</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <label for="sel1">For more goto vendors </label>
                                <button class="btn btn-primary btn-block"><i class="fa fa-search"></i> SEARCH</button>
                            </div>
                        </div>
                    </form>
                </div>  
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div id="fphone">
                        <label><b>GET IN TOUCH.</b></label><br>
                        <a href="tel:+251-9-22-77-88-74"><label class="fa fa-phone"> Phone:+251-9-22-77-88-74.</label><br></a>
                        <a href="tel:+251-9-11-78-59-69"><label class="fa fa-phone"> Phone:+251-9-11-78-59-69.</label><br></a>
                        <a href="tel:+251-9-23-13-26-15"><label class="fa fa-phone"> Phone:+251-9-23-13-26-15.</label><br></a>
                        <a href="mailto:bersuadane@gmail.com"><label class="fa fa-envelope"> Email:info@leserge.com</label>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <label>Follow leserge.com on...</label><br>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="https://www.facebook.com/leserge.me" style="color: #3b5998;" class="fa fa-facebook-official fa-3x"></a> &nbsp;
                                <a href="https://www.googleplus.com" style="color: #d34836;" class="fa fa-google-plus-official fa-3x"></a> &nbsp;
                                <a href="https://www.twitter.com" style="color: #4099ff;" class="fa fa-twitter fa-3x"></a> &nbsp;
                                <a href="https://www.telegram.me/leserge" style="color: #00BFFF;" class="fa fa-telegram fa-3x"></a>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <div class="container" id="fback" align="center">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#goup" class="btn btn-default btn-block">
                            <label class="fa fa-arrow-up" style="color:#666"> Back To Top</label>
                        </a>

                    </div>
		    <div class="col-xs-12">
			<label><b>Get in touch with leserge.me</b></label><br/>
                        <small><a href="tel:+251-9-22-77-88-74"><label class="fa fa-phone"> Phone:+251-9-22-77-88-74.</label></a> | 
                        <a href="tel:+251-9-11-78-59-69"><label class="fa fa-phone"> Phone:+251-9-11-78-59-69.</label></a> | </small>
                        <small><a href="tel:+251-9-23-13-26-15"><label class="fa fa-phone"> Phone:+251-9-23-13-26-15.</label></a> | <a href="mailto:info@leserge.com"><label class="fa fa-envelope"> Email:info@leserge.com</label></a></small>
		</div>
                </div>
		<small> Design And Developed By TENTECH Company </small>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div align="center" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    &copy; 2017 - {{ date('Y')}} Alright Reserved By leserge.com
                </div>
            </div>
        </div>
    </footer>