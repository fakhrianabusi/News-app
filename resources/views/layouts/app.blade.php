<!DOCTYPE html>
<html>
<head>
    <title>My Site</title>
</head>
<body>

    <a href="{{ url('/') }}">Home</a> |
    <a href="{{ url('/about') }}">About</a> |
    <a href="{{ url('/news') }}">News</a> |
    <a href="{{ url('/contact') }}">Contact</a>

    @yield('content')

</body>
</html>