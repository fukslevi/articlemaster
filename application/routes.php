<?php

/*********/
/* users */
/*********/
Route::get('users', array('as' => 'users', 'uses' => 'users@index'));
Route::get('users/(:any)', array('as' => 'user', 'uses' => 'users@show'));
// Update a user
Route::get('users/(:any)/edit', array('as' => 'edit_user', 'uses' => 'users@edit'));
Route::put('users/(:any)', array('before' => 'csrf' , 'uses' => 'users@update'));
// Delete a user
Route::delete('users/(:any)',array('before' => 'csrf' , 'uses' => 'users@destroy'));
// Register a user
Route::get('users/register', array('as' => 'register_user', 'uses' => 'users@register'));
Route::post('users', array('before' => 'csrf' , 'uses' => 'users@create'));
// Login a user
Route::get('login', array('as' => 'login_user', 'uses' => 'users@login'));
Route::post('login', array('before' => 'csrf' , 'uses' => 'users@login'));
// Logout a user
Route::get('logout', array('as' => 'logout_user', 'uses' => 'users@logout'));

Route::get('profile/(:any)', array('as' => 'profile_user', 'uses' => 'users@profile'));



/************/
/* Articles */
/************/
Route::get('/', function(){
	return View::make('home.index');
});

// article Resource
Route::get('articles', array('as' => 'articles', 'uses' => 'articles@index'));
Route::get('articles/(:any)/show', array('as' => 'article', 'uses' => 'articles@show'));
Route::get('articles/new', array('as' => 'new_article', 'uses' => 'articles@new'));
Route::get('articles/(:any)/edit', array('as' => 'edit_article', 'uses' => 'articles@edit'));
Route::post('articles', 'articles@create');
Route::put('articles/(:any)', 'articles@update');
Route::delete('articles/(:any)', 'articles@destroy');

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('laravel.query', function($sql){
	var_dump($sql);
});

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});