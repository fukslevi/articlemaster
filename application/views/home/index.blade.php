@layout('templates/homepage')
	
<!-- Start sidebar right -->
@section('sidebar_right')

	@section('login')
		<div class="login_form">
			<h3 class="h3">Login</h3>
			<span>Enter your email and password</span>
			<input type="text" value="email">
			<input type="password" value="password">
			<input type="submit" value="Login">

		</div>
	@endsection

	@section('categories')
		<nav>
			<ul>
				<!-- foreach($categories as $category)
					<li><a href="#"> $category->name </a></li>
				endforeach -->
				<h3 class="h3">Categories</h3>
				<li><a href="#">אומנות</a></li>
				<li><a href="#">אינטרנט</a></li>
				<li><a href="#">ביטוח</a></li>
				<li><a href="#">בידור</a></li>
				<li><a href="#">בית</a></li>
				<li><a href="#">בריאות</a></li>
				<li><a href="#">חוק ומשפט</a></li>
				<li><a href="#">הובלות</a></li>
			</ul>
		</nav>
	@endsection

	@section('social')
		<h3 class="h3">Share us</h3>
		@section('facebook')
			<a href="#"><img src="../img/facebook.jpg" alt="Share it on Facebook"></a>
		@endsection
		@section('twitter')
			<a href="#"><img src="../img/twitter.jpg" alt="Share it on Twitter"></a>
		@endsection
	@endsection

@endsection
<!-- End Sidebar right -->

<!-- Start Sidebar left -->
@section('sidebar_left')
	@section('search_form')
	<div>This is the search form</div>
	<input type="text" value="search">
	@endsection
@endsection
<!-- End Sidebar left -->

<!-- Start content -->
@section('main_content')
	
	@section('video_intro')
	@endsection

	@section('latest_article_list')

			<h3 class="h3">Article list</h1>
		    <hr>
		    <div>
			@foreach ($articles as $article)

		     <h4 class="h4">
		     {{ HTML::link_to_route('articles' , $article->title, array($article->id)) }}
		      </h4>

            <div>
                {{ e($article->content) }}
            </div>

            <p>
            {{ HTML::link_to_route('edit_article' , 'Edit article', array($article->id)) }}
            {{ Form::open('articles/'.$article->id , 'DELETE', array('style'=>'display:inline;')) }}
            {{ Form::submit('Delete') }}
            {{ Form::close() }}
            </p>
       		<hr>
       		@endforeach
	@endsection
@endsection

