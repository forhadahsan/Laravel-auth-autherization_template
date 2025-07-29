<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create user role if not exists
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Create normal user
        $user = User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'name' => 'Normal User',
                'password' => Hash::make('12345678'),
            ]
        );

        // Assign role
        $user->assignRole($userRole);
    }
}
