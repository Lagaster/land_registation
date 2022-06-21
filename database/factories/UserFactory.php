<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'dob'=>$this->faker->date(),
            'image'=>$this->faker->imageUrl(),
            'national_id'=>$this->faker->numberBetween(100000,999999),
            'id_image'=>$this->faker->imageUrl(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'role'=>$this->faker->randomElement(["admin","land registrar","user"]),
            'kra_pin'=>$this->faker->numberBetween(1000),
            'gender'=>$this->faker->randomElement(["male","female"]),
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => now(),
            ];
        });
    }
}
