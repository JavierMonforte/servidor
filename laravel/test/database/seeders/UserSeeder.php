<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'registrado',
            'email' => 'registrado@dws.es',
            'password' => bcrypt('secret')
        ]);
        User::create([
            'id' => 2,
            'name' => 'usuario',
            'email' => 'usuario@dws.es',
            'password' => bcrypt('secret'),
            'role_id' => 2
        ]);
        User::create([
            'id' => 3,
            'name' => 'admin',
            'email' => 'admin@dws.es',
            'password' => bcrypt('secret'),
            'role_id' => 3
        ]);
    }
}
