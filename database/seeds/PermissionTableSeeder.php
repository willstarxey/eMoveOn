<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**CREACION DE PERMISOS */
        Permission::create([
            'name' => 'sends.index'
        ]);
        Permission::create([
            'name' => 'sends.create'
        ]);
        Permission::create([
            'name' => 'sends.show'
        ]);
        Permission::create([
            'name' => 'sends.edit'
        ]);
        Permission::create([
            'name' => 'sends.update'
        ]);
        Permission::create([
            'name' => 'sends.list'
        ]);
        Permission::create([
            'name' => 'sends.packer'
        ]);

        /**CREACION DE ROLES */
        $user = Role::create(['name' => 'Usuario']);
        $user->givePermissionTo([
            'sends.create','sends.list','sends.show'
        ]);

        $repartidor = Role::create(['name' => 'Repartidor']);
        $repartidor->givePermissionTo([
            'sends.edit','sends.show','sends.index','sends.update','sends.packer'
        ]);
    }
}
