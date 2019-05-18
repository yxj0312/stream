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
Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/statuses', function() {
//     return App\Status::with('user')->latest()->get();
// });

Route::get('/statuses','StatusesController@index');
Route::post('/statuses','StatusesController@store');

Route::post('/contact','ContactController@store');


Route::get('/video', function() {
    return view('video');
});

Route::post('completions', 'CompletionsController@store');


// Route for 'How do I' Ep 11 - How Do I Dry Up My Forms

use App\Post;

Route::resource('posts', 'PostsController');