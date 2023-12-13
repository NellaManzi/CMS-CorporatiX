<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::updateOrCreate([
            'name'     => 'Funcionário',
            'slug'    => 'funcionario',
        ]);

        Category::updateOrCreate([
            'name'     => 'Blog',
            'slug'    => 'blog',
        ]);

        Category::updateOrCreate([
            'name'     => 'Alimentação',
            'slug'    => 'alimentacao',
        ]);

        Category::updateOrCreate([
            'name'     => 'Esporte',
            'slug'    => 'esporte',
        ]);

    }
}
