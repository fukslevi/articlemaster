@layout('templates/master')

@section('content')

	@section('form')

	@if($errors->has())
		<ul>
			{{ $errors->first('first_name', '<li>:message</li>'); }}
			{{ $errors->first('last_name', '<li>:message</li>'); }}
			{{ $errors->first('email', '<li>:message</li>'); }}
			{{ $errors->first('password', '<li>:message</li>'); }}
		</ul>
	@endif

	{{ Form::open('users') }}

		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', Input::old('first_name')) }}

		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', Input::old('last_name')) }}

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', Input::old('email')) }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}

		{{ Form::submit('Create User') }}

	{{ Form::close() }}

	@endsection

@endsection