<?php

use Illuminate\Database\Seeder;
use App\ViolationType;
class ViolationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ViolationType::create(['violation_type' => 'Negligência']);
        ViolationType::create(['violation_type' => 'Violência física']);
        ViolationType::create(['violation_type' => 'Violência psicológica']);
        ViolationType::create(['violation_type' => 'Violência sexual (abuso)']);
        ViolationType::create(['violation_type' => 'Exploração sexual comercial']);
        ViolationType::create(['violation_type' => 'Trabalho Infantil']);
        ViolationType::create(['violation_type' => 'Violência fatal']);
        ViolationType::create(['violation_type' => 'Outros Tipos']);
    }
}
