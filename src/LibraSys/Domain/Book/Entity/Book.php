<?php

namespace LibraSys\Domain\Book\Entity;

class Book
{
    public function __construct(
        public readonly string $title,
        public readonly string $description
    ) {
    }
}
