@extends('layouts.app')

@section('title','Книга')

@section('content')

<h1>{{ $book['title'] }}</h1>

<p>Автор: {{ $book['author'] }}</p>

<a href="{{ route('admin.books.index') }}" class="btn btn-primary">
Назад
</a>

@endsection