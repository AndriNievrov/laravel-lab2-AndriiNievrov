@extends('layouts.app')

@section('title')
Каталог книг
@endsection

@section('content')

<h1>Каталог книг</h1>

<div class="row">

@foreach($books as $book)

<x-card :title="$book['title']" :author="$book['author']"/>

@endforeach

</div>

@endsection