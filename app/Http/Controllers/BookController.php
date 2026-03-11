<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ["id"=>1, "name"=>"Книга 1"],
            ["id"=>2, "name"=>"Книга 2"],
            ["id"=>3, "name"=>"Книга 3"]
        ];

        return $books;
    }

    public function show($id)
    {
        return "Сторінка книги з ID: " . $id;
    }
}