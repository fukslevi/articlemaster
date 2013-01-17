@layout('templates/homepage')
	
<!-- Start sidebar right -->
@section('sidebar_right')

	@section('login')
		<div>This is the place for the login form.</div>
	@endsection

	@section('categories')
		<nav>
			<ul>
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
		@section('facebook')
			<img src="../img/facebook.png" alt="Share it on Facebook">
		@endsection
		@section('twitter')
			<img src="../img/twitter.png" alt="Share it on Twitter">
		@endsection
	@endsection

@endsection
<!-- End Sidebar right -->

<!-- Start content -->
@section('main_content')
	
	@section('video_intro')
	@endsection

	@section('latest_article_list')

			<h1>Article list</h1>
		    <hr>
		    <div>
			@foreach ($articles as $article)             
		     <h2>
		     {{ HTML::link_to_route('article' , $article->title, array($article->id)) }}
		      </h2>

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

@section('sidebar_left')
	@section('search_form')
	<div>This is the search form</div>
	@endsection
@endsection