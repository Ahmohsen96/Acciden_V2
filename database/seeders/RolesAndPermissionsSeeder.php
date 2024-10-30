<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // Retrieve roles by name
        $admin = Role::findByName('admin');
        $user = Role::findByName('user');

        // Retrieve permissions by name
        $viewDashboard = Permission::findByName('view dashboard');
        $manageUsers = Permission::findByName('manage users');

        // Assign permissions to roles
        $admin->givePermissionTo([$viewDashboard, $manageUsers]);
        $user->givePermissionTo($viewDashboard);
    }
}
