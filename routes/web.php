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

Route::get('/', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
//Route::get('/posts/{post}', 'PostController@show');

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