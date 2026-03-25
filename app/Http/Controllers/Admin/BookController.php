<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id'=>1,'title'=>'Laravel','author'=>'Taylor','price'=>100],
            ['id'=>2,'title'=>'PHP','author'=>'Rasmus','price'=>150],
        ];

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'price'=>'required|numeric'
        ]);

        return redirect()->route('admin.books.index')
            ->with('success','Книгу додано');
    }

    public function show($id)
    {
        $book = ['id'=>$id,'title'=>"Книга $id",'author'=>'Автор','price'=>100];

        return view('admin.books.show', compact('book'));
    }

    public function destroy($id)
    {
        return redirect()->route('admin.books.index')
            ->with('success','Видалено');
    }
}