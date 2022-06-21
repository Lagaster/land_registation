<?php

namespace Database\Factories;

use App\Models\Land;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
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
            'paid_by'=>fn()=>User::all()->random(),
            'paid_to'=>fn()=>User::all()->random(),
            'merchantRequestID'=>$this->faker-> randomDigit(2,100) ,
            'checkoutRequestID'=>$this->faker-> randomDigit(2,100) ,
            'amount' => $this->faker-> randomDigit(1500,20000) ,
            'responseCode' => function(){
                $results = [
                    0, 1032, '',
                ];
                return $results[array_rand($results)];
            },
            'resultCode' => function(){
                $results = [
                    0, 1032, '',
                ];
                return $results[array_rand($results)];
            },
            'resultDesc'=>$this->faker-> realText(20,4) ,
            'responseDescription'=>$this->faker->realText(20,4),
            'resultCode'=>$this->faker-> randomDigit(1,5),
            'phoneNumber'=>$this->faker->phoneNumber,
            'mpesaReceiptNumber' => $this->faker->phoneNumber,
            'balance' => $this->faker->numberBetween(100,12000) ,
            'active' => $this->faker->boolean,
            'transactionDate' => $this->faker->dateTimeBetween('-30 days', '+0 days'),
        ];
    }
}
