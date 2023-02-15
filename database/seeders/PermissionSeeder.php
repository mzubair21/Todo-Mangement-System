<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        //Creating Admin (Role)
        $admin = Role::create(['name' => 'Admin', 'description' => 'This Role has Authority to Create, Read, Update and Delete.']);

        //Creating User (Role)
        $user = Role::create(['name' => 'User', 'description' => 'This Role has Authority to Read.']);


        //Assigning Permissions to Admin (Role)
        $admin->givePermissionTo(Permission::all());
        $user->syncPermissions(['role-list']);
    }
    
}
