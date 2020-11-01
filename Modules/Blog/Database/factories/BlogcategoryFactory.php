<?php

namespace Modules\Blog\Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Entities\Blogcategories;
class BlogcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blogcategories::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word();
        return [
            'title' => $title,
            'excerpt' => $this->faker->text(),
            'image' => $this->faker->imageUrl(),
            'slug' => $title
        ];
    }
}



