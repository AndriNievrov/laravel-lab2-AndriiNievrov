@extends('layouts.app')

@section('content')

<h1>Додати книгу</h1>

<form method="POST" action="{{ route('admin.books.store') }}">
@csrf

<input name="title" placeholder="Назва" class="form-control mb-2">
<input name="author" placeholder="Автор" class="form-control mb-2">
<input name="price" placeholder="Ціна" class="form-control mb-2">

<button class="btn btn-success">Зберегти</button>

</form>

@endsection