<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'markjc@mweb.co.za',
                'password' => bcrypt('ibmhal13971'),
                'remember_token' => null,
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Teacher',
                'email' => 'teacher@teacher.com',
                'password' => bcrypt('password'),
                'remember_token' => null,
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Student',
                'email' => 'student@student.com',
                'password' => bcrypt('password'),
                'remember_token' => null,
                'email_verified_at' => now(),
            ],
        ];

        \App\Models\User::insert($users);
    }
}
