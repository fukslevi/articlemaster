@layout('templates/users/logs')

@section('content')

	@section('register')

	@if($errors->has())
		<ul>
			{{ $errors->first('email', '<li>:message</li>'); }}
			{{ $errors->first('password', '<li>:message</li>'); }}
			{{ $errors->first('password_confirmation', '<li>:message</li>'); }}
		</ul>
	@endif

	<h3 class="h3">הרשמה בחינם</h3>

	{{ Form::open('users') }}

		{{ Form::token() }}

		{{ Form::label('email', 'אימייל') }}
		{{ Form::text('email', Input::old('email')) }}

		{{ Form::label('password', 'סיסמה') }}
		{{ Form::password('password') }}

		{{ Form::label('password_confirmation', 'אימות סיסמה') }}
		{{ Form::password('password_confirmation') }}

		{{ Form::submit('הירשם עכשיו!') }}

	{{ Form::close() }}

	@endsection

@endsection