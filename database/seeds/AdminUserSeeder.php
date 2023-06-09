<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the databa
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create([
            'name' => 'Admin Perpus',
            'email' => 'admin@perpus.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now()
        ]);

        $user->assignRole('admin');
        return $user;
    }
}
