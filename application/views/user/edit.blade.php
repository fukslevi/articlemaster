@layout('templates/master')

@section('content')

	@section('form')

	@if($errors->has())
		<ul>
			{{ $errors->first('first_name', '<li>:message</li>'); }}
			{{ $errors->first('last_name', '<li>:message</li>'); }}
			{{ $errors->first('email', '<li>:message</li>'); }}
			{{ $errors->first('password', '<li>:message</li>');}}
			{{ $errors->first('password_confirmation', '<li>:message</li>');}}
		</ul>
	@endif

	{{ Form::open('users/update', 'PUT') }}

		{{ Form::token() }}

		{{ Form::hidden('id', $edit_user->id) }}

		{{ Form::label('first_name', 'First Name') }}
		{{ Form::text('first_name', Input::old('first_name',$edit_user->first_name)) }}

		{{ Form::label('last_name', 'Last Name') }}
		{{ Form::text('last_name', Input::old('last_name' ,$edit_user->last_name)) }}

		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', Input::old('email', $edit_user->email)) }}

		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}

		{{ Form::label('password_confirmation', 'Confirm Password') }}
		{{ Form::password('password_confirmation') }}

		{{ Form::submit('Update User') }}

	{{ Form::close() }}

	@endsection

@endsection