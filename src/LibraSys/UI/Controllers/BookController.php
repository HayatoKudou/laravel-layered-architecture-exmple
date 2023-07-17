<?php

namespace LibraSys\UI\Controllers;

use Illuminate\Http\JsonResponse;
use LibraSys\Infrastructure\QueryService\BookQueryService;

class BookController extends Controller
{
    public function getBookWithRentalHistories(
        BookQueryService $bookQueryService,
    ): JsonResponse
    {
        $books = $bookQueryService->fetchWithRentalHistories(1);
        return \response()->json($books);
    }
}
