<?php

use Illuminate\Database\Seeder;
use App\AgeRange;

class AgeRangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgeRange::create(['age_range'=> '0 a 3']);
        AgeRange::create(['age_range'=> '4 a 6']);
        AgeRange::create(['age_range'=> '7 a 11']);
        AgeRange::create(['age_range'=> '12 a 15']);
        AgeRange::create(['age_range'=> '16 a 18']);
        AgeRange::create(['age_range'=> 'Noinfo']);
    }
}
