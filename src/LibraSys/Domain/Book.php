<?php

namespace LibraSys\Domain;

class Book
{
    public function __construct(
        public readonly string $title,
        public readonly string $description
    ) {
    }
}
