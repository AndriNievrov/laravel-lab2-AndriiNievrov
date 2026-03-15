<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [
        1 => ["title"=>"Книга 1","author"=>"Автор 1"],
        2 => ["title"=>"Книга 2","author"=>"Автор 2"],
        3 => ["title"=>"Книга 3","author"=>"Автор 3"]
    ];

    // INDEX — список книг
    public function index()
    {
        $books = $this->books;
        return view('admin.books.index', compact('books'));
    }

    // SHOW — деталі книги (Route Model Binding імітуємо id)
    public function show($id)
    {
        $book = $this->books[$id];
        return view('admin.books.show', compact('book'));
    }

    // DESTROY — видалення
    public function destroy($id)
    {
        return redirect()->route('admin.books.index')
            ->with('success','Книгу видалено (демо)');
    }
}