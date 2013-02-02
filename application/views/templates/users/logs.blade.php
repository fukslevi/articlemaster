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
<body class="users">

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
						<li>{{HTML::link_to_route('logout_user' , 'התנתק ('.Auth::user()->email.')') }}</li>
					@endif
				</ul>
			</nav>
			@yield('header')
		</div>
	</div>
	<!-- End Header -->

<div id="container">

	<!-- Login form -->
    <section id="login">
    	@yield('login')	
    </section>

    <!-- Register form -->
    <section id="register">
    	@yield('register')
    </section>

</div>


<!-- Start Footer -->
<footer id="footer">
	<p>This is the footer section..</p>
</footer>
<!-- End Footer -->

</body>
</html>