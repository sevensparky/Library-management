<?php

namespace Samkaveh\Book\Providers;

use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../databases/migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Book');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
