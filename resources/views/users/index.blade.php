<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Users</h1>
    @foreach($users as $user)
        <h2>{{ $user['id'] }}: {{ $user['name'] }}</h2>
    @endforeach
</body>
</html>
