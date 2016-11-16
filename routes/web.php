<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/confirm', 'WelcomeController@index');
Route::get('/activated', 'WelcomeController@activated');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'HomeController@index');

Route::get('/projects', 'ProjectController@index');
Route::get('/project/{project}', 'ProjectController@show');
Route::post('/project', 'ProjectController@create');
Route::post('/project/{project}', 'ProjectController@store');

Route::get('/tasks', 'TaskController@index');
Route::get('/task/{task}', 'TaskController@show');
Route::post('/task', 'TaskController@create');
Route::post('/task/{task}', 'TaskController@store');
