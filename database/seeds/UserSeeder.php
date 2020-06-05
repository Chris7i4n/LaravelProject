<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'AlgaADM',
											'admin' => true,
											'email'=>'alga@123.com',
											'cpf' => '12345678901',
											'password' => Hash::make('password')
											]);

											User::create(['name' => 'Alga',
											'admin' => false,
											'email'=>'alga@123.com',
											'cpf' => '12345678902',
											'password' => Hash::make('password')
											]);



			}
}
