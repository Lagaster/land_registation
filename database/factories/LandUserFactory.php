<?php

namespace Database\Factories;

use App\Models\Land;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LandUser>
 */
class LandUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'land_id'=>fn()=>Land::all()->random(),
            'user_id'=>fn()=>User::all()->random(),
            'is_owner'=>$this->faker->boolean(40),
            'start'=>$this->faker->date(),
            'end'=>$this->faker->date(),
            'verified_at'=> Carbon::now()->subDays(random_int(1,60)),
            'verified_by'=>fn()=>User::where('role', 'land registrar')->get()-> random()
        ];
    }
}
