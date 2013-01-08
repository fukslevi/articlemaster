@layout('templates/master')

@section('content')
	
	<ul>
		<h2>User Details</h2>
	@foreach($user as $user)
		
		
		<li>{{ $user->first_name }}</li>
		<li>{{ $user->last_name }}</li>
		<li>{{ $user->email }}</li>
		<li>{{ $user->password }}</li>

	@endforeach

	</ul>

	<ul>
		<h2>User Post</h2>

	@foreach($articles as $article)	

	<h3>{{ HTML::link_to_route('article' , $article->title , array($article->id)) }}</h3>
	{{ $article->content }}
	
	<h4>Author Name: {{ $article->user->first_name }} </h4>

	<hr>

	@endforeach

	</ul>

@endsection
