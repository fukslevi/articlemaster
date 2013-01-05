@layout('templates/master');

@section('content')

	<h3>For now, it shows the post id - I need to join the user table to the articles table</h3>
<nav>
	<ul>

	@foreach($articles as $article)
			

				<li>
					<h2>{{$article->title}}</h2>
					<p>
						{{ $article->content }}
					</p>
				</li>
	@endforeach

	</ul>
		</nav>
		
@endsection