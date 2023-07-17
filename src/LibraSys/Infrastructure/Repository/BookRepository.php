<?php

namespace LibraSys\Infrastructure\Repository;


use LibraSys\Domain;
use LibraSys\Infrastructure\EloquentModel;

class BookRepository
{
    public function store(Domain\Book\Entity\Book $book): void
    {
        EloquentModel\Book::create([
            'title' => $book->title,
            'description' => $book->description,
        ]);
    }
}
