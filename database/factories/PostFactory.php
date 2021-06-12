<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $posts = [
            [
                'title' => 'فرهنگی'
            ],
            [
                'title' => 'برنامه نویسی'
            ],
        ];

        foreach ($posts as $post) {
            $this->model::create($post);
        }
        exit;
    }
}
