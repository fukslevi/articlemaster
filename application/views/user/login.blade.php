@layout('templates/master')

@section('content')
	
	@section('form')

	@if($errors->has())
		<ul>
			{{ $errors->first('title', '<li>:message</li>'); }}
			{{ $errors->first('content', '<li>:message</li>'); }}
		</ul>
	@endif

	{{ Form::open('login') }}

	{{ Form::token() }}

	<p>
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', Input::old('email')) }}
	</p>
	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::text('password') }}		
	</p>

	<p>
		{{ Form::submit('Login') }}
	</p>

	{{ Form::close() }}

	@endsection

@endsection