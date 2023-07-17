<?php

namespace LibraSys\Application\ReadModel;

use Carbon\CarbonImmutable;

class BookWithRentalHistory
{
    public function __construct(
        public readonly string $bookTitle,
        public readonly string $userName,
        public readonly CarbonImmutable $rentalDate
    ) {
    }
}
