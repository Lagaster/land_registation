<?php

namespace Database\Seeders;

use App\Models\ValuationReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValuationReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ValuationReport::factory(15)->create();
    }
}
