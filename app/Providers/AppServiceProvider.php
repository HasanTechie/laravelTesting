<?php

namespace App\Providers;

use \App\Billing\Stripe;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() //assuming laravel has been booted what you want to do
    {
        //
//        \View()::composer  (view facade)
        view()->composer('layouts/sidebar', function ($view){ //callback function

            $tags = \App\Tag::has('posts')->pluck('name');
            $archives = \App\Post::archives();

            $view->with(compact(['tags','archives']));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() //use this method to register things into the serivce container
    {
        //
//        \App::singleton('App\Billing\Stripe', function (){
//            return new \App\Billing\Stripe(config('services.stripe.secret'));
//        });

        //because this is an service provider, there is also an app property on the object that we can reference aswell
        $this->app->singleton(Stripe::class, function (/* it will also accept an $app variable or arugment, so that means if you ever need to resolve something else out of container in order to pass it *, you can do that*/){
            //*here
//            $app->make()
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
