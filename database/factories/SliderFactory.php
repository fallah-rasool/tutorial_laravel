<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caption'=>$this->faker->title,
            'image'=> $this->faker->imageUrl,
            'price'=>$this->faker->numberBetween(1000,3000),
            'link'=>$this->faker->url,
            'publish'=>$this->faker->numberBetween(0,1),
        ];
    }
}
