@extends('layouts.app')

@section('content')

<h1>{{ $book['title'] }}</h1>

<p>Автор: {{ $book['author'] }}</p>
<p>Ціна: {{ $book['price'] }}</p>

<a href="{{ route('admin.books.index') }}" class="btn btn-secondary">
Назад
</a>

@endsection