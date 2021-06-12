<?php

namespace Samkaveh\Author\Database\Seeders;

use Illuminate\Database\Seeder;
use Samkaveh\Author\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->make();
    }
}
