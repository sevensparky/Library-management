<?php

namespace Samkaveh\Dashboard\Providers; 

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Dashboard');
        $this->loadRoutesFrom(__DIR__.'/../Routes/route.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
