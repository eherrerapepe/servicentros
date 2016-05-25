<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'User Valvoline',
            'username' => 'userValvoline',
            'email' => 'valvoline@example.com',
            'role' => 'admin',
            'password' => Hash::make('admin')
        ]);

        factory(App\User::class)->create([
            'name' => 'User Comuna Digital',
            'username' => 'userComunaDigital',
            'email' => 'comuna_digital@example.com',
            'role' => 'admin',
            'password' => Hash::make('admin')
        ]);
    }
}
