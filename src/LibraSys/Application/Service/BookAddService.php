<?php

namespace LibraSys\Application\Service;

use LibraSys\Domain\Book\Entity\Book;
use LibraSys\Infrastructure\Repository\BookRepository;

class BookAddService
{
    public function __construct(
        private readonly BookRepository $bookRepository,
    ) {
    }

    public function add(string $title, string $description): void
    {
        $book = new Book($title, $description);
        $this->bookRepository->store($book);
    }
}
