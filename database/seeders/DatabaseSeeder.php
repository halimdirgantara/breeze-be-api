<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);

        //create user seeder:
        $user = User::Create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $superadmin = User::find($user->id);
        $superadmin->AssignRole('superadmin');


    }
}
