<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json(['message' => 'Not found'], 404);
        }

        return response()->json($book);
    }

    public function store(Request $request)
    {
        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author
        ]);

        return response()->json($book, 201);
    }
}