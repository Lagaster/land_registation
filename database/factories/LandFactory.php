<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Land>
 */
class LandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'plot_no'=> Str::uuid(),
            'size'=>$this->faker->numberBetween(1,100),
            'sheet_no'=>$this->faker->numberBetween(1,10000),
            'title_deed'=>Str::uuid(),
            'is_bind'=>$this->faker->boolean(50)
        ];
    }
}
