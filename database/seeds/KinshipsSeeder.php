<?php

use Illuminate\Database\Seeder;
use App\Kinship;

class KinshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kinship::create(['kinship_name' => 'Mãe']);
        Kinship::create(['kinship_name' => 'Pai']);
        Kinship::create(['kinship_name' => 'Irmão']);
        Kinship::create(['kinship_name' => 'Padrasto']);
        Kinship::create(['kinship_name' => 'Madrasta']);
        Kinship::create(['kinship_name' => 'Outro parente']);
        Kinship::create(['kinship_name' => 'Não possui parentesco']);
        Kinship::create(['kinship_name' => 'Não identificado']);

    }
}
