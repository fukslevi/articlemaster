@layout('templates/master')

@section('content')

	<h2>List of users</h2>
	
	<P>{{ HTML::link_to_route('new_user' , 'Sign up now!') }}</P>

	@foreach($users as $user)

	<div>
		<!-- {{ HTML::link_to_route('article' , $user->first_name, array($user->id)) }} -->
		<p><span>Name: </span>{{ HTML::link_to_route('user', $user->first_name, array($user->id)) }}</p>

		<p><span>Email: </span>{{ e($user->email) }}</p>

		{{ HTML::link_to_route('edit_user' , 'Edit user', array($user->id)) }}

		{{ Form::open('users/'.$user->id, 'DELETE', array('style'=>'display:inline;')) }}
		{{ Form::token() }}
		{{ Form::submit('Delete') }}
		{{ Form::close() }}

	</div>

	<hr>

	@endforeach

@endsection