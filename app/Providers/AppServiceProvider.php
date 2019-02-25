<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Uploadcare;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploadcare', function ($app) {
            return new Uploadcare\Api(env('UPLOADCARE_PUBLIC'), env('UPLOADCARE_SECRET'));
        });
    }
}
