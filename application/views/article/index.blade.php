@layout('templates/master')

@section('content')


<P>{{ HTML::link_to_route('new_article' , 'Create a new article') }}</P>


	@section('article_list')

	<h1>Article list</h1>
		@foreach ($articles as $article)
        
        <div>
         	<h2>
                {{ HTML::link_to_route('article' , $article->title, array($article->id)) }}
            </h2>

            <div>
                {{ $article->content }}
            </div>

                    <p>
                    {{ HTML::link_to_route('edit_article' , 'Edit article', array($article->id)) }}
                    {{ Form::open('articles/'.$article->id , 'DELETE', array('style'=>'display:inline;')) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                    </p>

        </div>
        <hr>

        @endforeach
	@endsection

@endsection