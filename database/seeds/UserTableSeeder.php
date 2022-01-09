<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = array(
            [
                'name' => 'Admin',
                'email' => 'admin@system.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'Admin',
                'is_super_admin' => 1
            ],
        );

        foreach ($admins as $admin) {
            \App\User::create($admin);
        }
    }
}
