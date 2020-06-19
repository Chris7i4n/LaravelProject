<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenderSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocalitiesSeeder::class);
        $this->call(EthnicitiesSeeder::class);
        $this->call(AgeRangesSeeder::class);
        $this->call(ViolationTypesSeeder::class);
        $this->call(AgeRangesViolationAgents::class);
        $this->call(KinshipsSeeder::class);
    }
}
