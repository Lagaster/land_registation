<?php

namespace Database\Seeders;

use App\Models\LandRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LandRate::factory(10)->create();
    }
}
