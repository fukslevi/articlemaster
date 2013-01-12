@layout('templates/master')

@section('content')

	@section('form')

	@if($errors->has())
		<ul>
			{{ $errors->first('email', '<li>:message</li>'); }}
			{{ $errors->first('password', '<li>:message</li>'); }}
			{{ $errors->first('password_confirmation', '<li>:message</li>'); }}
		</ul>
	@endif

	{{ Form::open('users') }}

		{{ Form::token() }}

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', Input::old('email')) }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}

		{{ Form::label('password_confirmation', 'Confirm Password') }}
		{{ Form::password('password_confirmation') }}

		{{ Form::submit('Sign up!') }}

	{{ Form::close() }}

	@endsection

@endsection