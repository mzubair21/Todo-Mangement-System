<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@123';
        $admin->password = Hash::make('admin');
        $admin->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@123';
        $user->password = Hash::make('user');
        $user->save();

        $adminRole = Role::findByName('Admin');
        $admin->assignRole($adminRole);

        $userRole = Role::findByName('User');
        $user->assignRole($userRole);

    }
}
