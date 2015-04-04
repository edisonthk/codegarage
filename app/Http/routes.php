<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Snippet and Tags routing
Route::controller('/json/tag','TagController');
Route::put('/json/snippet/draft/{id?}', ['middleware'=>'auth.login','uses'=>'SnippetController@saveDraft']);
Route::resource('/json/snippet','SnippetController');
Route::get('/json/search','SnippetController@search');
Route::post('/json/images/upload', 'ImageController@upload');
Route::post('/json/feedback','FeedbackController@send');


// Account routing
// All kinds of user auth is using in this method
Route::controller('/account','AccountController');

Route::get('/', function(){
	if(Config::get('app.debug')){
		return redirect('http://localhost:8000/_p/index.html');	
	}else{
		return redirect('/_p/index.html');
	}
});
Route::get('/_p', function() {
	include public_path().'/_p/index.html';
});
// AngularJS 
Route::get('/_p/{a?}/{b?}/{c?}', function($a = null, $b = null, $c = null) 
{
	include public_path().'/_p/index.html';
});

// old version redirect
Route::get('/snippets', function() {
	return redirect('/_p/index.html');
});
Route::get('/snippets/{id?}', function($id = '') {
	return redirect('/_p/snippet/'.$id);
});