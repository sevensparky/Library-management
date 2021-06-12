<?php

namespace Samkaveh\Common\Providers;

use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Common');
        $this->mergeConfigFrom(__DIR__.'/../Config/sidebar.php','sidebar');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
    }

    public function boot()
    {
        
    }

}