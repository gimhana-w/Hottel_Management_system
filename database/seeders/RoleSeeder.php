<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create admin role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        
        // Get or create user role
        $userRole = Role::firstOrCreate(['name' => 'user']);
        
        // Get all permissions
        $permissions = Permission::all();
        
        // Sync all permissions to admin role
        $adminRole->syncPermissions($permissions);
        
        // Give basic permissions to user role
        $userRole->syncPermissions([
            'view-dashboard',
            'room-view',
            'room-number-view'
        ]);
    }
}
