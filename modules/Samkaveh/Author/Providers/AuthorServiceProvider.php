<?php

namespace Samkaveh\Author\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views','Author');
        $this->loadRoutesFrom(__DIR__.'/../Routes/router.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        Factory::guessFactoryNamesUsing(function(string $model){
            return 'Samkaveh\\Author\\Database\\Factories\\' .class_basename($model). 'Factory';
        });
    }

    public function boot()
    {
        config()->set('sidebar.items.authors',[
            'url' => route('authors.index'),
            'icon' => 'fa-pencil',
            'title' => 'نویسندگان و مترجمان'
        ]);
    }

}