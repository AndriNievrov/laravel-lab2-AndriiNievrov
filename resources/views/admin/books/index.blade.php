@extends('layouts.app')

@section('title','Книги')

@section('content')

<h1>Список книг</h1>

<a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3">
Додати книгу
</a>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<table class="table">

<tr>
<th>Назва</th>
<th>Автор</th>
<th>Дії</th>
</tr>

@foreach($books as $id => $book)

<tr>

<td>{{ $book['title'] }}</td>
<td>{{ $book['author'] }}</td>

<td>

<a href="{{ route('admin.books.show',$id) }}" class="btn btn-info">
Перегляд
</a>

<form action="{{ route('admin.books.destroy',$id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">
Видалити
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection