<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
