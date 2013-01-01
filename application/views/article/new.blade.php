@layout('templates/master')

@section('content')
	
	@section('form')

	{{Form::open('articles')}}
		
		{{ Form::label('art_title' ,'title') }}
		{{ Form::text('art_title', $article) }}

		{{ Form::label('art_content' ,'content') }}
		{{ Form::textarea('art_content', $article) }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}

	@endsection <!-- End form -->

@endsection <!-- End content -->
