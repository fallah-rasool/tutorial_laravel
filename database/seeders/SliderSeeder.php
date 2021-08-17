<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=\Faker\Factory::create();
      
        for ($i=0; $i < 10; $i++) { 
            Slider::create([
                'caption'=>$faker->title,
                'image'=> $faker->imageUrl,
                'price'=>$faker->numberBetween(1000,3000),
                'link'=>$faker->url,
                'publish'=>$faker->numberBetween(0,1),
            ]);
        }
  
    }
}
