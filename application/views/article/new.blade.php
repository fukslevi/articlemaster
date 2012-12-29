@layout('templates/master')

@section('content')
	
	@section('form')
	{{ Form::open('/') }}

		{{ Form::label('title' ,'title') }}
		{{ Form::text('title') }}

		{{ Form::label('content' ,'content') }}
		{{ Form::textarea('content') }}

		{{ Form::submit('Submit') }}

	{{ Form::close() }}
	@endsection <!-- End form -->

@endsection <!-- End content -->
