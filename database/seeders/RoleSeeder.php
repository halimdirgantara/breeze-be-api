<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create role seed:
        Role::Create([
            'name' => 'superadmin',
        ]);
        Role::Create([
            'name' => 'editor',
        ]);
        Role::Create([
            'name' => 'author',
        ]);
        Role::Create([
            'name' => 'user',
        ]);
    }
}
