<?php
namespace Modules\Services\Database\Factories;
use Modules\Services\Entities\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
    */
    public function definition()
    {
        $title = $this->faker->word(5);
        return [
            'name' => $title,
            'excerpt' => $this->faker->text(),
            'description' => $this->faker->text(rand(300, 900)),
            'show_footer_menu' => rand(0,1),
            'featured' => rand(0,1),
            'image' => $this->faker->imageUrl(),
            'slug' => $title
        ];
    }
}



