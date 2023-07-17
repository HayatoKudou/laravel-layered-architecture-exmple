<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LibraSys\Infrastructure\EloquentModel\Book;
use LibraSys\Infrastructure\EloquentModel\BookRentalHistory;
use LibraSys\Infrastructure\EloquentModel\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => '山田',
            'email' => 'yamada@test.test',
            'password' => 'password',
        ]);
        $book = Book::create([
            'title' => '山田',
            'description' => 'test',
        ]);
        BookRentalHistory::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'reason' => "test",
            'rental_date' => now(),
            'return_date' => now(),
        ]);
    }
}
