<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'santiago.marlus@gmail.com',
            'password' => Hash::make('admin'),
            'tipo_usuario_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
