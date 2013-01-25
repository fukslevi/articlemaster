@layout('templates/users/logs')

@section('login')
<div class="login_form">
    		<h3 class="h3">התחבר</h3>
    		@if($errors->has())
    			<ul>
    				{{ $errors->first('title', '<li>:message</li>'); }}
    				{{ $errors->first('content', '<li>:message</li>'); }}
    			</ul>
    		@endif

    		@if(Session::has('message'))
    		<p id="message">
    			{{ Session::get('message') }}
    		</p>
    		@endif

			{{ Form::open('login') }}
			{{ Form::token() }}
				{{ Form::label('email', 'אימייל:') }}
				{{ Form::text('email', Input::old('email')) }}
				{{ Form::label('password', 'סיסמה:') }}
				{{ Form::text('password') }}		
				{{ Form::submit('Login') }}
			{{ Form::close() }}
    	</div>
@endsection

