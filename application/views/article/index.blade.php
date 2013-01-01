@layout('templates/master')

@section('content')
<p>{{ HTML::link_to_route('article' , 'Show specific article', array(1)) }}</p>

<p>{{ HTML::link_to_route('new_article' , 'Create a new article') }}</p>

<p>{{ HTML::link_to_route('edit_article' , 'Edit specific article', array(1)) }}</p>

	@section('article_list')

	<h1>Article list</h1>
		@foreach ($articles as $article)
        <div>
         	
        	<h2><a href="articles/{{ $article->id }}/edit">{{ $article->art_title }}</a></h2>
        		<!-- <h2> {{ $article->art_title }} </h2> -->
        	
        	<p> {{ $article->art_content }} </p>
        </div>
        @endforeach
	@endsection

@endsection