<?php

namespace Modules\Portfolio\Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Portfolio\Entities\Portfolio;

class PortfolioFactory extends Factory 
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portfolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->word(10);
        return [
            'title' => ucfirst($title),
            'excerpt' => $this->faker->text(),
            'description' => $this->faker->text(rand(300, 900)),
            'image' => $this->faker->imageUrl(),
            'slug' => $title
        ];
    }
}