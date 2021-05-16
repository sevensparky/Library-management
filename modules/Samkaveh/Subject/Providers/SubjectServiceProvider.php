<?php

namespace Samkaveh\Subject\Providers;

use Illuminate\Support\ServiceProvider;
use Samkaveh\Subject\databases\Repositories\SubjectRepository;
use Samkaveh\Subject\databases\Repositories\SubjectRepositoryInterface;

class SubjectServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../databases/migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Subject');
    }

    public function boot()
    {
        $this->app->bind(SubjectRepositoryInterface::class,SubjectRepository::class);
    }

}