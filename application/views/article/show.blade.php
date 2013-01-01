@foreach($articles as $article)
		
		<h3>For now, it shows the post id - I need to join the user table to the articles table</h3>
	<nav>
		<ul>
			<li>
				<h2>{{$article->art_title}}</h2>
				<p>
					{{ $article->art_content }}
				</p>
			</li>
		</ul>
	</nav>
@endforeach
