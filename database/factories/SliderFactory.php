<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{

    protected $model = Slider::class;


    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'caption'=>$this->faker->text,
            'image'=>$this->faker->imageUrl(),
            'status'=>$this->faker->numberBetween(0,1)
        ];
    }
}
