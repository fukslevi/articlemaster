@layout('templates/articles/articles');

@section('article_list')

	<nav>
		<ul>
			@if(Session::has('message'))
    		<p id="message">
    			{{ Session::get('message') }}
    		</p>
    		@endif
		@foreach($articles as $article)
			<li>
				<h4>{{ e($article->title) }}</h4>
				@if(Auth::check())
				<span>Author Name: {{ $article->user->first_name}} </span>
				<div id="editable" contenteditable="true">
					{{ e($article->content) }}
				</div>
				{{Form::open('articles/update', 'PUT')}}
				{{ Form::hidden('id', $edit_article->id) }}
				{{ Form::submit('Submit', array('class' => 'btn btn-inverse submit')) }}
				{{ Form::close() }}
				@else
				<div>
					{{ e($article->content) }}
				</div>
				@endif
			</li>
		@endforeach
		</ul>
	</nav>
		
@endsection