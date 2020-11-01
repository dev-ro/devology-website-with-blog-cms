<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  
        $designation  = [
            'web developer',
            'designer',
            'hr',
            'tester'

        ];

        $title = $this->faker->name();
        return [
            'team_name' => $title,
            'designation' => $designation[rand(0,3)],
            'image'=> $this->faker->imageUrl(),
            'description' => '',
            'slug' => $title
        ];
    }
}
