@layout('templates/master')

@section('content')	

	<nav>
		<ul>

		@foreach($user_posts as $user_post)

			<!-- SHOW USER NAME ONLY ONCE-->
			<h3>{{$user_post->user->first_name}}'s posts</h3>

			
				<h2>{{ $user_post->title }}</h2>
				{{ $user_post->content }}

				<hr>
			
		@endforeach

		</ul>
	</nav>

@endsection