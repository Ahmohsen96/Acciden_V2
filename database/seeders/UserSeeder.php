<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create roles if they don't exist
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);

        // Create permissions if they don't exist
        Permission::firstOrCreate(['name' => 'view dashboard']);
        Permission::firstOrCreate(['name' => 'manage users']);

        // Create the admin user
        $admin = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('adminpassword'), // Use a strong password
        ]);

        // Assign the admin role and permissions
        $admin->assignRole('admin');
        $admin->givePermissionTo(['view dashboard', 'manage users']);

        // Create the normal user
        $normalUser = User::firstOrCreate([
            'email' => 'user@example.com',
        ], [
            'name' => 'Normal User',
            'password' => bcrypt('userpassword'), // Use a strong password
        ]);

        // Assign the user role
        $normalUser->assignRole('user');
    }
}
