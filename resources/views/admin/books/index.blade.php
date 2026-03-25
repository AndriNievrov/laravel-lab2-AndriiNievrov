@extends('layouts.app')

@section('content')

<h1>Книги</h1>

<a href="{{ route('admin.books.create') }}" class="btn btn-primary mb-3">
Додати книгу
</a>

<table class="table">
<tr>
<th>ID</th>
<th>Назва</th>
<th>Автор</th>
<th>Ціна</th>
<th>Дії</th>
</tr>

@foreach($books as $book)
<tr>
<td>{{ $book['id'] }}</td>
<td>{{ $book['title'] }}</td>
<td>{{ $book['author'] }}</td>
<td>{{ $book['price'] }}</td>
<td>

<a href="{{ route('admin.books.show',$book['id']) }}" class="btn btn-info btn-sm">
Перегляд
</a>

<form action="{{ route('admin.books.destroy',$book['id']) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm">Delete</button>
</form>

</td>
</tr>
@endforeach

</table>

@endsection