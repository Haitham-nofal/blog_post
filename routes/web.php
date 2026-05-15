<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// all controller
Route::resource('books', BookController::class);

Route::post('books/{book}/borrow', [BookController::class, 'borrow'])->name('books.borrow');
