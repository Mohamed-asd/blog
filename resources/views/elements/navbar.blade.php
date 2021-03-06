<div class="navbar  navbar-default navbar-static-top">

	<div class="container-fluid">

	    <div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>

		</div>




		<a class="navbar-brand" href="/">Blog</a>

		<ul class="nav navbar-nav">
			<li><a href="/posts">Posts</a></li>
			<li>
				<a href="{{ route('PageAbout') }}">About Me</a>
			</li>
			<li><a href="/contact">Contact Us</a></li>
		</ul>

	    <div class="collapse navbar-collapse" id="app-navbar-collapse">
	        <!-- Left Side Of Navbar -->
	        <ul class="nav navbar-nav">
	            &nbsp;
	        </ul>

	        <!-- Right Side Of Navbar -->
	        <ul class="nav navbar-nav navbar-right">
	            <!-- Authentication Links -->
	            @guest
	                <li><a href="{{ route('login') }}">Login</a></li>
	                <li><a href="{{ route('register') }}">Register</a></li>
	            @else
	                <li class="dropdown">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
	                        {{ Auth::user()->name }} <span class="caret"></span>
	                    </a>

	                    <ul class="dropdown-menu">
	                    	<li>
	                    		<a href="/posts/create"><i class="fas fa-plus"></i> Write Post</a>
	                    	</li>
	                    	<li>
	                    		<a href="{{ route('home') }}"><i class="fas fa-cog"></i> Admin</a>
	                    	</li>
	                    	<li class="divider"></li>
	                        <li>
	                            <a href="{{ route('logout') }}"
	                                onclick="event.preventDefault();
	                                         document.getElementById('logout-form').submit();">
	                                         <i class="fas fa-sign-out-alt"></i>
	                                Logout
	                            </a>

	                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                {{ csrf_field() }}
	                            </form>
	                        </li>
	                    </ul>
	                </li>
	            @endguest
	        </ul>
	    </div>

	</div>

</div>