<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/books', [BookController::class,'index'])->name('books.index');

    Route::get('/books/{id}', [BookController::class,'show'])->name('books.show');

    Route::delete('/books/{id}', [BookController::class,'destroy'])->name('books.destroy');

});