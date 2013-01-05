@layout('templates/master')

@section('content')

	<h2>List of users</h2>
	
	<P>{{ HTML::link_to_route('new_user' , 'Sign up now!') }}</P>

	@foreach($users as $user)

	<div>
		
		<p><span>Name: </span>{{ $user->first_name }}</p>

		<p><span>Email: </span>{{ $user->email }}</p>

		{{ HTML::link_to_route('edit_user' , 'Edit user', array($user->id)) }}

		{{ Form::open('users/'.$user->id, 'DELETE', array('style'=>'display:inline;')) }}
		{{ Form::submit('Delete') }}
		{{ Form::close() }}

	</div>

	<hr>

	@endforeach

@endsection