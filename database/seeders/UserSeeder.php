<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use function Filament\Forms\Components\Concerns\enum;

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
            'status'   => true,
            'role_id'=> Role::where('slug', 'administrador')->first()->id,
        ]);

        User::updateOrCreate([
            'name'     => 'Usuário Teste',
            'email'    => 'teste@hotmail.com',
            'password' => Hash::make('teste'),
            'status'   => false,
            'role_id'=> Role::where('slug', 'usuario')->first()->id,
        ]);
    }
}
