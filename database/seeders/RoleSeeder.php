<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role; //Importamos el modelo de Role
use Spatie\Permission\Models\Permission; //Importamos el modelo de permiso

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'user']);

        Permission::create(['name' => 'Ver panel Administración'])->assignRole($role1);
        Permission::create(['name' => 'Ver Contactos'])->assignRole($role1);
        Permission::create(['name' => 'Crear Contactos'])->assignRole($role1);
        Permission::create(['name' => 'Editar Contactos'])->assignRole($role1);

        Permission::create(['name' => 'Ver eventos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Crear Eventos'])->assignRole($role1);
        Permission::create(['name' => 'Finalizar Evento'])->syncRoles([$role1, $role2]);
    }
}
