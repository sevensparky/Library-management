<?php

namespace Samkaveh\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/../Resources/views','User');
        $this->loadJsonTranslationsFrom(__DIR__.'/../Resources/lang');
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
