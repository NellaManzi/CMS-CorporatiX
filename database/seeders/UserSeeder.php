<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'name'     => 'Rafael Blum',
            'email'    => 'rafaelblum_digital@hotmail.com',
            'password' => Hash::make('123'),
            'status'   => true
        ]);

        User::updateOrCreate([
            'name'     => 'Usuário Teste',
            'email'    => 'teste@hotmail.com',
            'password' => Hash::make('teste'),
            'status'   => false
        ]);
    }
}
