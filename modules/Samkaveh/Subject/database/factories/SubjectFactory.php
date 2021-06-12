<?php

namespace Samkaveh\Subject\Database\Factories;

use Samkaveh\Subject\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subjects =  [
            [
                'title' => 'ادبیات',
                'slug' => 'ادبیات',
                'description' => 'ادبیات'
            ],
            [
                'title' => 'فرهنگی',
                'slug' => 'فرهنگی',
                'description' => 'فرهنگی'
            ]
        ];

        foreach ($subjects as $subject) {
            $this->model::create($subject);
        }
        exit;
    }
}
