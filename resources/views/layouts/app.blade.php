<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Site')</title>
</head>

<body>

    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">About</a> |
    <a href="{{ route('news.index') }}">News</a> |
    <a href="{{ route('contact') }}">Contact</a> |
    <a href="{{ route('admin.news.index') }}">Admin</a>

    @if (session('success'))
    <p style="color:green">{{ session('success') }}</p>
    @endif

    @if (session('error'))
    <p style="color:red">{{ session('error') }}</p>
    @endif

    @yield('content')

</body>

</html>