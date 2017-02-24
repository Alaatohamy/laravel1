<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return realpath(base_path('resources/views'));
   return view('welcome');
});

Route::get('users',['uses' => 'usersController@index']);

/*Route::get('users',function(){
	$users = [
	'0'=>['fname' => 'Alaa',
	      'lname' => 'Tohamy'],

	'1' =>['fname' => 'Ahmed',
	       'lname' => 'Elgendy']

	];
return $users;

});*/
