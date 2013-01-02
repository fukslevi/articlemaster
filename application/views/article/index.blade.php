@layout('templates/master')

@section('content')


<P>{{ HTML::link_to_route('new_article' , 'Create a new article') }}</P>


	@section('article_list')

	<h1>Article list</h1>
		@foreach ($articles as $article)
        
        <div>
         	<h2>{{ HTML::link_to_route('article' , $article->art_title, array($article->id)) }}</h2>


        		<!-- <h2> {{ $article->art_title }} </h2> -->
        	
        	<p> {{ $article->art_content }} </p>
            <a href="{{URL::to('articles/'.$article->id)}}" onclick="return confirm('Are you sure?')">Delete</a>
            <span>{{ HTML::link_to_route('edit_article' , 'Edit article', array($article->id)) }}</span>
        </div>
        <hr>

        @endforeach
	@endsection

@endsection