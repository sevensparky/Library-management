<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Samkaveh\Author\Database\Seeders\AuthorSeeder;
use Samkaveh\Subject\Database\Seeders\SubjectSeeder;
use Samkaveh\User\Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SubjectSeeder::class,
            AuthorSeeder::class,
            UserSeeder::class
        ]);
    }
}
