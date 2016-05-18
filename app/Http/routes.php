<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('/', ['as'=>'public.home', 'uses'=>'PublicController@home']);
Route::get('/atemporale-portfolio-inovar-moveis', ['as'=>'public.prog1', 'uses'=>'PublicController@prog1']);
Route::get('/prog2', ['as'=>'public.prog2', 'uses'=>'PublicController@prog2']);
Route::get('/prog3', ['as'=>'public.prog3', 'uses'=>'PublicController@prog3']);
Route::get('/prog4', ['as'=>'public.prog4', 'uses'=>'PublicController@prog4']);