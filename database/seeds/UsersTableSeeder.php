<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Renato Dehnhardt',
            'email' => 'admin@domain.com',
            'password' => bcrypt('123456'),
            'api_token' => str_random(60),
            'picture' => md5(1) . '.jpg'
        ]);
    }
}
