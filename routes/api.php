<?php

use App\Http\Controllers\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/books', function (Request $request) {
//     return "Hello World";
// });

Route::apiResource('books', Book::class);
