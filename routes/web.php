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
    return view('auth.login');
});

Auth::routes();

Route::get('/forms/categories', function () {
    return view('/forms/categories');
});

Auth::routes();

Route::get('/forms/update', function () {
    return view('forms.update');
});

Auth::routes();

Route::get('/home', 'MoviesController@index');


Auth::routes();

Route::get('/suggestions', function () { 
    return view('suggestions');
});

Route::get('/categories', function () {

    //returns user to the previous page
    //return back()->withInput();
    return view('categories');
});

Route::post('back', function () {

    //returns user to the previous page
    //return back()->withInput();
});
