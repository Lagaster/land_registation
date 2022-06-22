<?php

namespace Database\Seeders;

use App\Models\StampDuty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StampDutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StampDuty::factory(15)->create();
    }
}
