<nav class="navbar navbar-light navbar-toggleable  navbar-fixed-top fnavbar">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed btn-default" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar" style="background-color: black;"></span>
                        <span class="icon-bar" style="background-color: black;"></span>
                        <span class="icon-bar" style="background-color: black;"></span>
                        <span class="icon-bar" style="background-color: black;"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="nav navbar-nav navbar-brand" id="brandimage">
                       <a href="/" class="navbar-brand">
			<small>
                            <img src="/storage/icon.ico" style="min-height: 30px; max-height: 30px; min-width: auto; max-width: auto; position: absolute; top: 12px;">
                        </small>
			</a>
                    </div>
                    <div class="nav navbar-nav hbrand" id="navbrand">
						<a href="/" class="navbar-brand">
                            <big><b>Le<i>serge</i></b></big>
                            <small>
                                <b>.com <i>ለሰርጌ ...</i></b>
                            </small>
                        </a>
					</div>
                    @if (Auth::guest())
                        <div class="navbar-toggle" id="logout">
                            <a href="/"><i {{{ (Request::is('/')? 'style=color:black;' : '') }}}><b class="fa fa-home fa-lg"></b></i></a> | 
                            <a href="{{ route('login') }}"><i class="fa fa-sign-in fa-lg" {{{ (Request::is('login')? 'style=color:black;' : '') }}}></i></a> |
                            <label class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <b class="fa fa-user-plus"></b>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href=" {{ route('register') }} "><i class="fa fa-user-plus fa-lg"></i> As a Company</a></li>
                                    <li>
                                        <a href="/user_register"><i class="fa fa-user-plus"></i> As a User</a>
                                    </li>
                                </ul>
                            </label>
                             | 
                            <a href="#fsearch"><i class="fa fa-search"></i></a> | 
                            <a href="/vendorList"><i class="fa fa-list" {{{ (Request::is('vendorList')? 'style=color:black;' : '') }}}></i></a> | 
                            <a href="#"><span class="flag-icon flag-icon-et"></span></a>
                        </div>
                    @else
                        <div class="navbar-toggle" id="loged">
                            <a href="/"><b class="fa fa-home fa-lg" {{{ (Request::is('/')? 'style=color:black;' : '') }}}></b></a> |
                            <a href="/profile"><i {{{ (Request::is('profile')? 'style=color:black;' : '') }}}>
                                <img src="/storage/profile_image/{{ Auth::user()->profile_pic}}" style="width: 32px; height: 32px; border-radius: 50%;"/></i>
                            </a> | 
                            <a href="/user-message"><i class="fa fa-comments-o fa-lg" {{{ (Request::is('user-message')? 'style=color:black;' : '') }}}></i></a> | 
                            <a href="#fsearch"><i class="fa fa-search"></i></a> | 
                            <a href="#"><span class="flag-icon flag-icon-et" ></span></a>                           
                        </div>
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right navul">
						<li {{{ (Request::is('/')? 'class=active' : '') }}}><a href="/"><b>Home</b></a></li>
						<li {{{ (Request::is('listType/Hotel')? 'class=active' : '') }}}><a href="{!! route('listType',['type' => 'Hotel'])!!}"><b>Hotels</b></a></li>
						<li {{{ (Request::is('listType/Photo'.' '.'And'.' '.'Video')? 'class=active' : '') }}}><a href="{!! route('listType',['type' => 'Photo And Video'])!!}"><b>Photo and videos</b></a></li>
						<li {{{ (Request::is('listType/Car')? 'class=active' : '') }}}><a href="{!! route('listType',['type' => 'Car'])!!}"><b>Car rentals</b></a></li>
						<li {{{ (Request::is('listType/Clothes (Wedding)')? 'class=active' : '') }}}><a href="{!! route('listType',['type' => 'Clothes (Wedding)'])!!}"><b>Grooms &#38; Bridal Clothes</b></a></li>
						<li {{{ (Request::is('vendorList')? 'class=active' : '') }}}><a href="/vendorList"><b>Vendors list</b></a></li>
						<!-- <li><a href="#"><b class="glyphicon glyphicon-log-in"></b><b> Login</b></a></li>
						<li><a href="#"><i class="fa fa-user-circle-o fa-lg"></i><b> Register</b></a></li> -->
					<!-- </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="nav navbar-nav navbar-right"> -->
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li {{{ (Request::is('login')? 'class=active' : '') }}}><a href="{{ route('login') }}"><b class="glyphicon glyphicon-log-in"></b><b> Login</b></a></li>
                            <li class="dropdown" {{{ (Request::is('register')? 'class=active' : '') }}}>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user-circle-o fa-lg"></i><b> Register</b>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href=" {{ route('register') }} "><i class="fa fa-user-plus"></i> As a Company</a></li>
                                    <li>
                                        <a href="/user_register"><i class="fa fa-user-plus"></i> As a User</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="flag-icon flag-icon-et"></span><b> አማርኛ</b></a></li>
                            <li><a href=""></a></li>
                        @else
                            <li {{{ (Request::is('profile')? 'class=active' : '') }}}>
                                <a href="/profile" style="position: relative; padding-left: 50px;">
                                    <img src="/storage/profile_image/{{ Auth::user()->profile_pic}}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%;"/> 
                                        <small><b>{{ substr(strip_tags(Auth::user()->name),0,8) }}
                                            @if(strlen(strip_tags(Auth::user()->name)) > 8)
                                                ...
                                            @endif</b>
                                        </small>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <b>
                                    Logout </b><b class="glyphicon glyphicon-log-out"></b>
                                </a>
                            </li>

                            <li {{{ (Request::is('አማርኛ')? 'class=active' : '') }}}><a href="#"><span class="flag-icon flag-icon-et"></span><b>አማርኛ</b></a></li>
                            <li><a href=""></a></li>

                            <li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                           
                        @endif
                    </ul>
            </div>
</nav>
