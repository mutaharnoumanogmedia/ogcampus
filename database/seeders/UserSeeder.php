<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'moderator', 'creator', 'user'];

        foreach ($roles as $roleName) {
            $user = User::updateOrCreate(
                ['email' => $roleName . '@baaboo-campus.com'],
                [
                    'name' => ucfirst($roleName),
                    'password' => Hash::make('baaboo123'), // Default password: 'password'
                    'email_verified_at' => now(),
                ]
            );

            // Assign role using Spatie Permission
            $role = Role::where('name', $roleName)->first();
            if ($role && !$user->hasRole($roleName)) {
                $user->assignRole($role);
            }
        }

        // Create additional test users for creator and user roles
        // Create 30 additional creators
        for ($i = 1; $i <= 30; $i++) {
            $user = User::updateOrCreate(
                ['email' => "creator{$i}@baaboo-campus.com"],
                [
                    'name' => fake()->name(),
                    'password' => Hash::make('baaboo123'),
                    'email_verified_at' => now(),
                ]
            );

            $role = Role::where('name', 'creator')->first();
            if ($role && !$user->hasRole('creator')) {
                $user->assignRole($role);
            }
        }

        // Create 100 regular users
        for ($i = 1; $i <= 100; $i++) {
            $user = User::updateOrCreate(
                ['email' => "user{$i}@baaboo-campus.com"],
                [
                    'name' => fake()->name(),
                    'password' => Hash::make('baaboo123'),
                    'email_verified_at' => now(),
                ]
            );

            $role = Role::where('name', 'user')->first();
            if ($role && !$user->hasRole('user')) {
                $user->assignRole($role);
            }
        }
    }
}
