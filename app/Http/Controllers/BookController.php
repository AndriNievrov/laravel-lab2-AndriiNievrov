<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ["title"=>"Книга 1","author"=>"Автор 1"],
            ["title"=>"Книга 2","author"=>"Автор 2"],
            ["title"=>"Книга 3","author"=>"Автор 3"]
        ];

        return view('books.index', compact('books'));
    }
}