<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moduleDashboard = Module::updateOrCreate(['name'=>'Painel dashboard']);


        Permission::updateOrCreate([
            'module_id'=> $moduleDashboard->id,
            'name'=> 'Painel dashboard',
            'slug'=> 'painel.dashboard'
        ]);

        $moduleRole = Module::updateOrCreate(['name'=>'Permissões CRUD']);

        Permission::updateOrCreate([
            'module_id'=> $moduleRole->id,
            'name'=> 'Visualizar',
            'slug'=> 'permissao.visualizar'
        ]);

        Permission::updateOrCreate([
            'module_id'=> $moduleRole->id,
            'name'=> 'Criação',
            'slug'=> 'permissao.criacao'
        ]);

        Permission::updateOrCreate([
            'module_id'=> $moduleRole->id,
            'name'=> 'Edição',
            'slug'=> 'permissao.edicao'
        ]);

        Permission::updateOrCreate([
            'module_id'=> $moduleRole->id,
            'name'=> 'Remover',
            'slug'=> 'permissao.remove'
        ]);
    }
}
