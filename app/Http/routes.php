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


/**
* First page is a form, then it gets posted
*/
# Index page to show all the books



Route::get('/', 'PageController@index');
# Process the form to create text
Route::post('/', 'PageController@getLoremIpsumText');

Route::get('practice', 'PageController@postText');

Route::get('practice2', 'PageController@getLoremIpsumText');
