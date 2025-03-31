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
         
            "viwe-dashbord"
        ];
        foreach ($permission as $key => $permission) {
            Permission::create(["name" => $permission]); 
        }
    }
}

