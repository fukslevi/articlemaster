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
	{{ HTML::script('/ckeditor/ckeditor.js') }}

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
					<li><a href="/">דף הבית</a></li>
					<li>{{HTML::link_to_route('articles' , 'מאמרים') }}</li>
					<li>{{HTML::link_to_route('users' , 'משתמשים') }}</li>

					@if(!Auth::check())
						<li>{{HTML::link_to_route('register_user' , 'הרשמה') }}</li>
						<li>{{HTML::link_to_route('login_user' , 'התחבר') }}</li>
					@else
					<li>{{HTML::link_to_route('profile_user' , 'לאיזור האישי') }}</li>
						<li>{{HTML::link_to_route('logout_user' , 'התנתק') }}</li>
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
			@if(!Auth::check())
		    <section id="login">
		    	<div class="login_form">
		    		<h3 class="h3">התחבר</h3>
		    		@if($errors->has())
		    			<ul>
		    				{{ $errors->first('title', '<li>:message</li>'); }}
		    				{{ $errors->first('content', '<li>:message</li>'); }}
		    			</ul>
		    		@endif

		    		@if(Session::has('message'))
		    		<p id="message">
		    			{{ Session::get('message') }}
		    		</p>
		    		@endif

	    			{{ Form::open('login') }}
	    			{{ Form::token() }}
	    				{{ Form::label('email', 'אימייל:') }}
	    				{{ Form::text('email', Input::old('email')) }}
	    				{{ Form::label('password', 'סיסמה:') }}
	    				{{ Form::text('password') }}		
	    				{{ Form::submit('Login') }}
	    			{{ Form::close() }}
		    	</div>
		    	@yield('login')	
		    </section>
		    @endif

	    <section id="social">
	    	<h3 class="h3">שתף אותנו</h3>
	    	@yield('social')

	    	<div class="facebook">
	    		@section('facebook')
    			<a href="#">
    				<img src="../img/facebook.jpg" alt="Share it on Facebook">
    			</a>
	    		@endsection
	    		@yield('facebook')
	    	</div>

	    	<div class="twitter">
	    		@section('twitter')
	    			<a href="#"><img src="../img/twitter.jpg" alt="Share it on Twitter"></a>
	    		@endsection
	    		@yield('twitter')
	    	</div>
		    	
		    </section>

		    <section id="categories">
		    	<h3>קטגוריות</h3>
		    	@yield('categories')
		    </section>
		    
		    	@yield('sidebar_right')
		</aside>

		<!-- End Sidebar Right -->
			
		<!-- Start Content -->
		<div class="main_content">			

			<!-- HOMEPAGE -->
			<div class="video_intro">
				@yield('video_intro')
			</div>

			@if(!Auth::check())
			<div class="register">
				@yield('register')
			</div>	
			@endif

			<div class="latest_article_list">
				@yield('latest_article_list')
			</div> 

			<!-- ARTICLE LIST -->


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