<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<title>title</title>
	<!-- CSS -->
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/vendors/bootstrap.css') }}
	{{ HTML::script('js/vendors/bootstrap.js') }}

</head>
<body>
	
	

		<!-- Start Header -->
		<div class="header_wrapper">
			<div class="header">
				<div class="logo">
					<img src="../img/logo.png" alt="Articlemaster logo">
				</div>
				<nav id="nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li>{{HTML::link_to_route('articles' , 'Articles') }}</li>
						<li>{{HTML::link_to_route('users' , 'Users') }}</li>

						@if(!Auth::check())
							<li>{{HTML::link_to_route('register_user' , 'Register') }}</li>
							<li>{{HTML::link_to_route('login_user' , 'Login') }}</li>
						@else
							<li>{{HTML::link_to_route('logout_user' , 'Logout ('.Auth::user()->email.')') }}</li>
						@endif
					</ul>
				</nav>
				@yield('header')
			</div>
		</div>
		<!-- End Header -->

		<div id="container">

		<!-- Start Sidebar Right -->

		<aside id="sidebar_right">

		    <section id="login">
		    	@yield('login')
		    	@if(Session::has('message'))
		    	<p id="message">
		    		{{ Session::get('message') }}
		    	</p>
		    	@endif
		    	
		    </section>

		    <section id="social">
		    	@yield('social')
		    	<div class="facebook">
		    		@yield('facebook')
		    	</div>
		    	<div class="twitter">
		    		@yield('twitter')
		    	</div>
		    	
		    </section>

		    <section id="categories">
		    	@yield('categories')
		    </section>
		    
		    	@yield('sidebar_right')
		</aside>

		<!-- Start sidebar_left -->
		<aside id="sidebar_left">
		    <section id="search_form">
		    	@yield('search_form')
		    </section>
		</aside>

		<!-- End Sidebar Right -->
			
		<!-- Start Content -->
		<div class="main_content">			

			<div class="video_intro">
				@yield('video_intro')
			</div>

			<div class="register">
				@yield('register')
			</div>

			<div class="latest_article_list">
				@yield('latest_article_list')
			</div> 

		@yield('main_content')
		</div> <!-- End Content -->

	</div>

		<!-- Start Footer -->
		<footer id="footer">
			<p>This is the footer section..</p>
		</footer>
		<!-- End Footer -->

	

</body>
</html>