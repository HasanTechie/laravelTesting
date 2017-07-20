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

/*
View => view() (companion helper function)
Request => request()
App => app()

 */

//laravel offer an App facade where we can bind() into the service countainer (the dependency injection container)

/*
 * single instance of a class
App::singleton('App\Billing\Stripe', function (){
    return new \App\Billing\Stripe(config('services.stripe.secret'));
});
*/
//App::bind('App\Billing\Stripe', function (){
//    return new \App\Billing\Stripe(config('services.stripe.secret'));
//}); //this is the way to register the class with service container

//App::instance('App\Billing\Stripe', $stripe);//swap instance with something else

//to resolve something out of service container App::make or resolve()
//$stripe = App::make('App\Billing\Stripe'); //resolve
//$stripe = resolve('App\Billing\Stripe'); //resolve

// ↑ this is very useful because otherwise every single time we need to build up new instance of stripe, we will be force to pass in all of its dependencies and in alot of situations, you have multiple dependencies and you have to build it up and you have factories and fairly complicated, but with approch you do it one time, you register this into service container and anywhere else in your app you can resolve it out of the container

//dd($stripe);

//dd(resolve('App\Billing\Stripe'));


Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@index');

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