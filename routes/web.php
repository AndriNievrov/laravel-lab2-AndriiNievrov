<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/books', [BookController::class,'index'])->name('books.index');
        Route::get('/books/create', [BookController::class,'create'])->name('books.create');
        Route::post('/books', [BookController::class,'store'])->name('books.store');
        Route::get('/books/{id}', [BookController::class,'show'])->name('books.show');
        Route::delete('/books/{id}', [BookController::class,'destroy'])->name('books.destroy');

});

require __DIR__.'/auth.php';