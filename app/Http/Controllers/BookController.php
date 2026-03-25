<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Показати список книг
    public function index()
    {
        // Приклад статичного масиву
        $books = [
            ['id' => 1, 'title' => 'Книга 1', 'author' => 'Автор 1', 'price' => 100],
            ['id' => 2, 'title' => 'Книга 2', 'author' => 'Автор 2', 'price' => 150],
        ];

        return view('admin.books.index', compact('books'));
    }

    // Форма створення нової книги
    public function create()
    {
        return view('admin.books.create');
    }

    // Збереження книги + валідація
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'price' => 'required|numeric|min:1'
        ]);

        // Тут можна додати збереження у базу
        // Book::create($validated);

        return redirect()->route('admin.books.index')
            ->with('success', 'Книгу успішно додано!');
    }

    // Показати деталі книги
    public function show($id)
    {
        // Статичний приклад
        $book = ['id' => $id, 'title' => "Книга $id", 'author' => "Автор $id", 'price' => 100 + $id*50];

        return view('admin.books.show', compact('book'));
    }

    // Видалення книги
    public function destroy($id)
    {
        // Тут можна додати видалення з бази
        return redirect()->route('admin.books.index')
            ->with('success', "Книгу $id успішно видалено!");
    }
}