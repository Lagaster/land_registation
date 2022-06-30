<?php

namespace Database\Factories;

use App\Models\Land;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StampDuty>
 */
class StampDutyFactory extends Factory
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
            'file'=>$this->faker->imageUrl(),
            'verified_at'=> Carbon::now()->subDays(random_int(1,60)),
            'verified_by'=>User::where('role', 'registrar')->get()-> random()

        ];
    }
}
