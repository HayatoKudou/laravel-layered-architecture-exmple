<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => '山田',
            'email' => 'yamada@test.test',
            'password' => 'password',
        ]);
    }
}
