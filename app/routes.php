<?php

Route::get('/', [
	'as' => 'home',
	'uses' => 'HomeController@index',
]);

Route::get('/sobre', [
	'as' => 'sobre',
	'uses' => 'SobreController@index',
]);

Route::get('/blog', [
	'as' => 'blog',
	'uses' => 'BlogController@index',
]);

Route::get('/blog/{slug}', [
	'as' => 'post-show',
	'uses' => 'PostController@getShow',
]);

Route::get('/contato', [
	'as' => 'contato',
	'uses' => 'ContactController@getContact',
]);

Route::post('contact_request', 'ContactController@getContactUsForm');

Route::get('/scripts-tcc', [
	'as' => 'scripts-tcc',
	'uses' => 'ScriptController@index',
]);

Route::post('/scripts-tcc', [
	'as' => 'scripts-tcc',
	'uses' => 'ScriptController@results'
]);

Route::get('/cartola-parciais', [
	'as' => 'cartola-parciais',
	'uses' => 'CartolaParciaisController@index',
]);

Route::get('/waven', [
	'as' => 'waven',
	'uses' => 'WavenController@index',
]);