<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<title>title</title>
	<!-- CSS -->
	{{ HTML::style('css/style.css') }}

</head>
<body>
	
	<div id="container">

		<!-- Start Header -->
		<div class="header">
			<nav id="nav">
				<ul>
					<li><a href="/">home</a></li>
					<li><a href="/articles">Articles</a></li>
					<li><a href="/users">Users</a></li>
				</ul>
			</nav>
		</div>
		<!-- End Header -->
			
		<!-- Start Content -->
		<div class="content">
			@if(Session::has('message'))
			<p id="message">
				{{ Session::get('message') }}
			</p>
			@endif
			@yield('content')
			
			<div class="articles_form">
				@yield('form')
			</div> <!-- End articles_form -->

			<div class="article_list">
				@yield('article_list')
			</div> <!-- End article_list -->

		</div> <!-- End Content -->

		<!-- Start Footer -->
		<footer id="footer">
			<p>This is the footer section..</p>
		</footer>
		<!-- End Footer -->

	</div>

</body>
</html>