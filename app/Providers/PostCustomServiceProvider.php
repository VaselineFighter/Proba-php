<?php

namespace App\Providers;

use App\Services\Booking\BookingService;
use App\Services\Post\PostService;
use Illuminate\Support\ServiceProvider;

class PostCustomServiceProvider extends ServiceProvider
{
     /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\Booking\BookingServiceInterface', function ($app) {
            return new BookingService(true);
          });
        $this->app->bind('App\Services\Post\PostServiceInterface', function ($app) {
            return new PostService(true);
        });
    }


}
