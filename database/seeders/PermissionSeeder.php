<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Dashboard permissions
            "view-dashboard",
            
            // User permissions
            "user-create",
            "user-edit",
            "user-delete",
            "user-view",
            
            // Role permissions
            "role-create",
            "role-edit",
            "role-delete",
            "role-view",
            
            // Room permissions
            "room-create",
            "room-edit",
            "room-delete",
            "room-view",
            
            // Room number permissions
            "room-number-create",
            "room-number-edit",
            "room-number-delete",
            "room-number-view",
            
            // Permission management
            "permission-create",
            "permission-edit",
            "permission-delete",
            "permission-view"
        ];
        
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(["name" => $permission]);
        }
    }
}

