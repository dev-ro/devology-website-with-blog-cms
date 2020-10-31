<?php

namespace Modules\Blog\Database\Factories;

use Modules\Blog\Entities\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word(5);
        return [
            'title' => $title,
            'excerpt' => $this->faker->text(),
            'description' => $this->faker->text(rand(300, 900)),
            'ft_img' => $this->faker->imageUrl(),
            'slug' => $title
        ];
    }
}



