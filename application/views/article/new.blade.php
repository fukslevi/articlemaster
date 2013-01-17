@layout('templates/master')

@section('content')
	
	@section('form')

	@if($errors->has())
		<ul>
			{{ $errors->first('title', '<li>:message</li>'); }}
			{{ $errors->first('content', '<li>:message</li>'); }}
		</ul>
	@endif

	{{Form::open('articles')}}
		
		{{ Form::label('title' ,'Title') }}
		{{ Form::text('title', Input::old('title')) }}

		{{ Form::label('content' ,'Content') }}
		{{ Form::textarea('content', Input::old('content')) }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}

	@endsection <!-- End form -->

@endsection <!-- End content -->
