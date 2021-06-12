<?php

namespace Samkaveh\Author\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Samkaveh\Author\Models\Author;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $authors = [
            [
                'name' => 'جلال آل احمد',
                'slug' => 'جلال-آل-احمد',
                'description' => 'جلال آل احمد نویسنده، منتقد ادبی و مترجم ایرانی بود که در دههٔ ۱۳۴۰ به شهرت رسید و در جنبش روشنفکری و نویسندگی ایران تأثیر بسزایی گذاشت'
            ],
            [
                'name' => 'محمود دولت آبادی',
                'slug' => 'محمود-دولت-آبادی',
                'description' => 'محمود دولت‌آبادی نویسنده اهل ایران است. رمان ده‌جلدیِ کلیدر مشهورترین اثر اوست برخی از آثار دولت‌آبادی به چندین زبانِ غربی و شرقی ترجمه و منتشر شده است',
            ]
        ];

        foreach ($authors as $author) {
            $this->model::create($author);
        }
        exit;
    }
}
