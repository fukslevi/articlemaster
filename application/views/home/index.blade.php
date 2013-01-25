@layout('templates/master')
	
<!-- Start sidebar right -->
@section('sidebar_right')

	@section('login')
	@endsection

	@section('categories')
	<nav>
		<ul>
			@foreach($categories as $category)

				<li><a href="#"> {{ $category->name }} </a></li>
			@endforeach
			
		</ul>
	</nav>
	@endsection

	@section('social')
	@endsection
@endsection
<!-- End Sidebar right -->



<!-- Start content -->
@section('main_content')
	
	@section('video_intro')
	<div class="video_intro">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/AGjyD28_YsU?list=PLhPHE4rwuXJ77742_c17YZjtqX9XKZxqX" frameborder="0" allowfullscreen></iframe>
	</div>
	@endsection

	@section('register')

		@if($errors->has())
			<ul>
				{{ $errors->first('email', '<li>:message</li>'); }}
				{{ $errors->first('password', '<li>:message</li>'); }}
				{{ $errors->first('password_confirmation', '<li>:message</li>'); }}
			</ul>
		@endif

		<h3 class="h3">הרשמה בחינם</h3>

		<div class="hp_form">

		{{ Form::open('users') }}

			{{ Form::token() }}

			{{ Form::label('email', 'אימייל') }}
			{{ Form::text('email', Input::old('email')) }}

			{{ Form::label('password', 'סיסמה') }}
			{{ Form::password('password') }}

			{{ Form::label('password_confirmation', 'אימות סיסמה') }}
			{{ Form::password('password_confirmation') }}

			{{ Form::submit('הירשם עכשיו!') }}

		{{ Form::close() }}
		</div>

		<div class="reg_bullets">
			<nav>
				<ul>
					<li>הרשם לאתר</li>
					<li>פרסם מאמר</li>
					<li>הרווח כסף!</li>
				</ul>
			</nav>				
		</div>

	@endsection

	@section('latest_article_list')

		<h3 class="h3">מאמרים אחרונים</h1>
	    <hr>
	    <div>
		@foreach ($articles as $article)

		<div>
	    <h4>
	    	{{ HTML::link_to_route('article' , $article->title, array($article->id)) }}
	     </h4>
        	<p> {{ e($article->content) }} </p>
        	<span class="read_more">
        		{{ HTML::link_to_route('article' , 'קרא עוד', array($article->id)) }}
        	</span>
        </div>

   		<hr>
		@endforeach

	@endsection

@endsection

