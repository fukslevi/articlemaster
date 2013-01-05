@layout('templates/master')

@section('content')

	@foreach($users as $user)
		
		<h3>Users table</h3>
	<nav>
		<ul>
			<li>{{$user->first_name}} </li>
			<li>{{ $user->last_name }}</li>
			<li>{{ $user->email }}</li>
			<li>{{ $user->password }}</li>
		</ul>
	</nav>
@endforeach

@endsection