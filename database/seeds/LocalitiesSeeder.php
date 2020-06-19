<?php

use Illuminate\Database\Seeder;
use App\Locality;

class LocalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Locality::create(['locality_name' => 'Urbana Central']);
        Locality::create(['locality_name' => 'Urbana Periférica']);
        Locality::create(['locality_name' => 'Rural']);
        Locality::create(['locality_name' => 'Noinfo']);

    }
}
