<!DOCTYPE html>
<html>
<head>
    <title>Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="/">My App</a>

<ul class="navbar-nav flex-row">

@guest
<li class="nav-item me-3">
<a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}">Register</a>
</li>
@endguest

@auth
<li class="nav-item me-3 text-white">
{{ Auth::user()->name }}
</li>

<li class="nav-item">
<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="btn btn-danger btn-sm">Вихід</button>
</form>
</li>
@endauth

</ul>

</div>
</nav>

<div class="container mt-4">

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

@yield('content')

</div>

</body>
</html>