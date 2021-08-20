<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{

    public function run()
    {
        Slider::factory()->count(50)->create();
    }
}
