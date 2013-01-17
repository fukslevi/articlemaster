@layout('templates/master')

@section('content')
	
	@section('form')

		@if($errors->has())
		<ul>
			{{ $errors->first('title', '<li>:message</li>'); }}
			{{ $errors->first('content', '<li>:message</li>'); }}
		</ul>
	@endif

	{{Form::open('articles/update', 'PUT')}}

		{{ Form::hidden('id', $edit_article->id) }}

		{{ Form::label('title' ,'title') }}
		{{ Form::text('title', Input::old('title', $edit_article->title)) }}

		{{ Form::label('content' ,'content') }}
		{{ Form::textarea('content', Input::old('content', $edit_article->content)) }}

		 {{ Form::submit('Update User') }}

	{{ Form::close() }}

	@endsection <!-- End form -->

@endsection <!-- End content -->
