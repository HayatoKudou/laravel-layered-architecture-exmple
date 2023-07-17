<?php

namespace LibraSys\Infrastructure\QueryService;

use LibraSys\Application\ReadModel\BookWithRentalHistory;
use LibraSys\Infrastructure\EloquentModel\Book;
use LibraSys\Infrastructure\EloquentModel\BookRentalHistory;

class BookQueryService
{
    public function fetchWithRentalHistories(string $bookId): array
    {
        $book = Book::find($bookId);

        return $book->rentalHistories
            ->map(function (BookRentalHistory $history) use ($book) {
                return new BookWithRentalHistory(
                    bookTitle: $book->title,
                    userName: $history->user,
                    rentalDate: $history->rental_date
                );
            })->all();
    }
}
