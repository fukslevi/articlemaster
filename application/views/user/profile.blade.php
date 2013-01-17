@layout('templates/profile')

@section('content')

<h2> Welcome {{Auth::user()->first_name;}} </h2>
	
	<ul>
		<h2>User Post</h2>

	@foreach($articles as $article)	

	<h3>{{ HTML::link_to_route('article' , $article->title , array($article->id)) }}</h3>
	{{ $article->content }}
	
	<h4>Author Name: {{ e($article->user->first_name) }} </h4>

	<hr>

	@endforeach

	</ul>

@endsection