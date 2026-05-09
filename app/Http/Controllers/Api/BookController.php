<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private $books = [
        [
            "id" => 1,
            "title" => "Кобзар",
            "category" => "Поезія"
        ],
        [
            "id" => 2,
            "title" => "Лісова пісня",
            "category" => "Драма"
        ],
        [
            "id" => 3,
            "title" => "Захар Беркут",
            "category" => "Історія"
        ]
    ];

    public function index(Request $request)
    {
        $category = $request->query('category');

        if ($category) {
            return response()->json(
                array_values(array_filter($this->books, function ($book) use ($category) {
                    return $book['category'] == $category;
                }))
            );
        }

        return response()->json($this->books);
    }

    public function categories()
    {
        return response()->json([
            "Поезія",
            "Драма",
            "Історія"
        ]);
    }
}