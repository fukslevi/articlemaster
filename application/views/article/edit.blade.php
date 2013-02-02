@layout('templates/articles/articles')

@section('content')
	
	@section('article_list')

	@if ( !Auth::guest() )
		@if($errors->has())
		<ul>
			{{ $errors->first('title', '<li>:message</li>'); }}
			{{ $errors->first('content', '<li>:message</li>'); }}
		</ul>
		@endif

	{{Form::open('articles/update', 'PUT')}}

		{{ Form::hidden('id', $edit_article->id) }}

		{{ Form::label('title' ,'title') }}
		{{ Form::text('title', Input::old('title', $edit_article->title)) }}

		{{ Form::label('content' ,'content') }}
		{{ Form::textarea('content', Input::old('content', $edit_article->content),array('class' => 'ckeditor')) }}

		 {{ Form::submit('Update User') }}

	{{ Form::close() }}

	@else
	<li>{{HTML::link_to_route('login_user' , 'התחבר') }}</li>
	@endif
	
	@endsection <!-- End form -->

@endsection <!-- End content -->
