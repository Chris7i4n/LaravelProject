<?php

use Illuminate\Database\Seeder;
use App\AgeRangesViolationAgent;

class AgeRangesViolationAgents extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgeRangesViolationAgent::create(['age_range'=> 'Adolescente']);
        AgeRangesViolationAgent::create(['age_range'=> 'Adulto jovem (até 29 anos)']);
        AgeRangesViolationAgent::create(['age_range'=> 'Adulto (dos 30 as 59 anos)']);
        AgeRangesViolationAgent::create(['age_range'=> 'idoso']);
    }
}
