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

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create'); //view login form
Route::post('/login','SessionsController@store'); //login the user
Route::get('/logout','SessionsController@destroy');

//eloquent model => Post
//controller => PostController
//migration => create_posts_table


/*
post -> resource

GET /post -> view all post
GET /post/create (to create a post)
POST /post
POST /post/{id}/edit
GET /post/{id} (for viewing selected post)
PATCH /post/{id}/ (for editing)
DELETE /post/{id}/ (for deleting)

*/