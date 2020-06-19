<?php

use Illuminate\Database\Seeder;
use App\Ethnicity;
class EthnicitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ethnicity::create(['ethnicity' => 'Branco']);
        Ethnicity::create(['ethnicity' => 'Negro']);
        Ethnicity::create(['ethnicity' => 'Índio']);
        Ethnicity::create(['ethnicity' => 'Pardo']);
        Ethnicity::create(['ethnicity' => 'Noinfo']);
    }
}
