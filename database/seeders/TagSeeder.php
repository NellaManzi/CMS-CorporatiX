<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::updateOrCreate([
            'name' => 'Departamento Pessoal',
            'slug' => 'departamento-pessoal'
        ]);

        Tag::updateOrCreate([
            'name' => 'Oportunidades',
            'slug' => 'Oportunidades'
        ]);

        Tag::updateOrCreate([
            'name' => 'Eventos',
            'slug' => 'eventos'
        ]);


    }
}
