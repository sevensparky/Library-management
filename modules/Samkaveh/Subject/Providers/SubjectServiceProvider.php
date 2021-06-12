<?php

namespace Samkaveh\Subject\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Subject');
        Factory::guessFactoryNamesUsing(function ($class) {
            return 'Samkaveh\\Subject\\Database\\Factories\\' . class_basename($class) . 'Factory';
        }); 
    }

    public function boot()
    {
        config()->set('sidebar.items.subjects',[
            'url' => route('subjects.index'),
            'icon' => 'fa-files-o',
            'title' => 'موضوعات'
        ]);
    }

}