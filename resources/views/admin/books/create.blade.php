@extends('layouts.app')

@section('title','Додати книгу')

@section('content')

<h1>Додати книгу</h1>

<form action="{{ route('admin.books.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Назва</label>
<input type="text" name="title" class="form-control">

@error('title')
<div class="text-danger">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label>Автор</label>
<input type="text" name="author" class="form-control">

@error('author')
<div class="text-danger">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label>Ціна</label>
<input type="number" name="price" class="form-control">

@error('price')
<div class="text-danger">{{ $message }}</div>
@enderror
</div>

<button class="btn btn-success">Додати</button>

</form>

@endsection