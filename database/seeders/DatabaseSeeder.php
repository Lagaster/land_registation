<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => "Land registrar",
            'email' => "registrar@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"), // password
            'dob'=>now(),
            'image'=>"image",
            'national_id'=>"12345678",
            'id_image'=>"himage",
            'phone'=>"0712345678",
            'address'=>"Kenya,Nairobi",
            'role'=>"registrar",
            'kra_pin'=>"A2345678",
            'gender'=>"female"
        ]);

        // $this->call(
        //     [
        //         LandSeeder::class,
        //         LandRateSeeder::class,
        //         LandUserSeeder::class,
        //         PaymentSeeder::class,
        //         StampDutySeeder::class,
        //         ValuationReportSeeder::class,
        //         LandUserSeeder::class,
        //         BindSeeder::class
        //     ]
        // );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
