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
        $permission = [
            "role-list",
            "role-create",
            "role-edit",
            "role-delete",
            "user-list",
            "user-create",
            "user-edit",
            "user-delete",
            "room-list",
            "room-create",
            "room-edit",
            "room-delete",
        ];
        foreach ($permission as $key => $permission) {
            Permission::create(["name" => $permission]); 
        }
    }
}
