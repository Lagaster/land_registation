<?php

namespace Database\Factories;

use App\Models\Land;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bind>
 */
class BindFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status'=>$this->faker->randomElement(['pending','approved','rejected','completed']),
            'land_id'=>fn()=>Land::all()->random(),
            'user_id'=>fn()=>User::all()->random(),
            'description'=> $this->faker->realText()
        ];
    }
}
