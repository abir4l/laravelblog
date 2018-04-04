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


/*Default routing homepage*/
Route::get('/', function () {
    return view('welcome');
});

/* Blogs controller routing mapping*/

// show all blogs page
Route::get('/blogs','BlogsController@index');

//Blogs creation form page to add a blog post
Route::get('/blogs/create','BlogsController@create');
Route::post('/blogs','BlogsController@store');

//Controller mapping to edit blog post
Route::get('/blogs/{id}','BlogsController@edit');
Route::post('/blogs/{id}/edit','BlogsController@update');

//Controller mapping to delete the blog post
Route::get('/blogs/{id}/delete','BlogsController@destroy');

