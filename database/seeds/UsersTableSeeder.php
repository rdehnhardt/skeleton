<?php

use App\Core\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'Admin',
            'role' => 'Administrador',
            'email' => 'admin@domain.com',
            'password' => '123456'
        ]);
    }
}