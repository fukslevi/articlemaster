@layout('templates/articles/articles')


@section('article_list')
	@if ( !Auth::guest() )
	@if($errors->has())
		<ul>
			{{ $errors->first('title', '<li>:message</li>'); }}
			{{ $errors->first('content', '<li>:message</li>'); }}
		</ul>
	@endif

	{{Form::open('articles')}}

		{{ Form::hidden('user', $user->id) }}
		
		{{ Form::label('title' ,'כותרת המאמר') }}
		{{ Form::text('title', Input::old('title')) }}

		{{ Form::label('content' ,'תוכן המאמר') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'ckeditor')) }}

		{{ Form::submit('Submit', array('class' => 'btn btn-inverse')) }}

	{{ Form::close() }}
@else
<li>{{HTML::link_to_route('login_user' , 'התחבר') }}</li>
@endif


@endsection <!-- End content -->
