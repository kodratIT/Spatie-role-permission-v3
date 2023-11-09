<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
        'name' => 'kodrat',
        'email' => 'kodrat@gmail.com',
        'password' => static::$password ??= Hash::make('password'),
         ]);

        $role = Role::create(['name' => 'Admin']);

        $user->assignRole($role);
    }
}
