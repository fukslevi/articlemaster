@layout('templates/master')

@section('content')
	
	@section('form')

	{{Form::open('articles')}}

		{{Form::hidden('id', Input::old('id', $edit_article->id)) }}

		{{ Form::label('art_title' ,'title') }}
		{{ Form::text('art_title', Input::old('art_title', $edit_article->art_title)) }}

		{{ Form::label('art_content' ,'content') }}
		{{ Form::textarea('art_content', Input::old('art_content', $edit_article->art_content)) }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}

	@endsection <!-- End form -->

@endsection <!-- End content -->
