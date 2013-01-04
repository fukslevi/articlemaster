@layout('templates/master')

@section('content')
	
	@section('form')

	@if($errors->has())
		<ul>
			{{ $errors->first('art_title', '<li>:message</li>'); }}
			{{ $errors->first('art_content', '<li>:message</li>'); }}
		</ul>
	@endif

	{{Form::open('articles')}}
		
		{{ Form::label('art_title' ,'title') }}
		{{ Form::text('art_title', Input::old('art_title')) }}

		{{ Form::label('art_content' ,'content') }}
		{{ Form::textarea('art_content', Input::old('art_content')) }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}

	@endsection <!-- End form -->

@endsection <!-- End content -->
