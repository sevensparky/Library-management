<?php

namespace Samkaveh\Author\Providers;

use Illuminate\Support\ServiceProvider;
use Samkaveh\Author\databases\Repositories\AuthorRepository;
use Samkaveh\Author\databases\Repositories\AuthorRepositoryInterface;

class AuthorServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Author');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
        $this->loadMigrationsFrom(__DIR__.'/../databases/migrations');
    }

    public function boot()
    {
        $this->app->bind(AuthorRepositoryInterface::class, AuthorRepository::class);
    }

}