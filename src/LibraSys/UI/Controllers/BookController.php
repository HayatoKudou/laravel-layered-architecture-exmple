<?php

namespace LibraSys\UI\Controllers;

use Illuminate\Http\JsonResponse;
use LibraSys\Application\Service\BookAddService;
use LibraSys\Infrastructure\QueryService\BookQueryService;
use LibraSys\UI\Requests\BookControllerGetBook;
use LibraSys\UI\Requests\BookControllerPostBook;

class BookController extends Controller
{
    public function getBookWithRentalHistories(
        BookQueryService $bookQueryService,
        BookControllerGetBook $request,
    ): JsonResponse
    {
        $validated = $request->validated();
        $books = $bookQueryService->fetchWithRentalHistories($validated['bookId']);
        return \response()->json($books);
    }

    public function postBook(
        BookControllerPostBook $request,
        BookAddService $service,
    ): JsonResponse
    {
        $validated = $request->validated();
        $service->add($validated['title'], $validated['description']);

        return \response()->json();
    }
}
