<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::where('name', 'super_admin')->first();

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@koperasi.test',
            'password' => Hash::make('password'),
            'role_id' => $role->id,
        ]);
    }
}