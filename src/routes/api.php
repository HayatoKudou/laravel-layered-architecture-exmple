<?php

use Illuminate\Support\Facades\Route;
use LibraSys\UI\Controllers\BookController;

Route::get("/books", [BookController::class, "getBookWithRentalHistories"]);
Route::post("/book", [BookController::class, "postBook"]);
