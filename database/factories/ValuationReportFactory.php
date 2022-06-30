<?php

namespace Database\Factories;

use App\Models\Land;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ValuationReport>
 */
class ValuationReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $land = $this->faker->numberBetween(10000,100000);
        $impro = $this->faker->numberBetween(1000,10000);
        $total =$this->faker->numberBetween(1000,10000);
        return [
            'land_id'=> fn()=>Land::all()->random(),
            'evaluated_at'=>$this->faker->date(),
            'landprice'=>$land,
            'improvement'=>$impro,
            'total'=>$total,
            'status'=>$this->faker->randomElement(['pending','approved','rejected']),
            'file'=>$this->faker->imageUrl(),
            'verified_at'=> Carbon::now()->subDays(random_int(1,60)),
            'verified_by'=>User::where('role', 'registrar')->get()-> random()
        ];
    }
}
