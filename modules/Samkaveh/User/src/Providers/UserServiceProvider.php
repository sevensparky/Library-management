<?php

namespace Samkaveh\User\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void 
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views','User');
        $this->loadJsonTranslationsFrom(__DIR__.'/../Resources/lang');
        Factory::guessFactoryNamesUsing(function ($class) {
            return 'Samkaveh\\User\\Database\\Factories\\' . class_basename($class) . 'Factory';
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        config()->set('sidebar.items.users',[
            'url' => route('users.index'),
            'icon' => 'fa-users',
            'title' => 'کاربران'
        ]);
    }
}
