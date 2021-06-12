<?php

namespace Samkaveh\Subject\Database\Seeders;

use Illuminate\Database\Seeder;
use Samkaveh\Subject\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::factory()->make();
    }
}
