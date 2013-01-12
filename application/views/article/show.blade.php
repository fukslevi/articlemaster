@layout('templates/master');

@section('content')

	<h3>For now, it shows the post id - I need to join the user table to the articles table</h3>
<nav>
	<ul>

	@foreach($articles as $article)
			

				<li>
					<h4>Author Name: {{ $article->user->first_name}} </h4>
					<h2>{{ e($article->title) }}</h2>
					<p>
						{{ e($article->content) }}
					</p>
				</li>
	@endforeach

	</ul>
		</nav>
		
@endsection