<?php

namespace Samkaveh\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Samkaveh\User\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->make();
    }
}
