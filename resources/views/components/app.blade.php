<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @isset($title)
            {{ $title }} / Laravel 11
        @else
            Laravel 11
        @endisset
    </title>
</head>
<body>
    <ul>
        <li><a href="/home">home</a></li>
        <li><a href="/about">about</a></li>
        <li><a href="/contact">contact</a></li>
        <li><a href="/gallery">gallery</a></li>
    </ul>

    {{ $slot }}
</body>
</html>
