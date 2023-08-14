<!DOCTYPE html>
<html>
<head>
    <title>Tags</title>
</head>
<body>
    <h1>Tags</h1>

    <ul>
        @foreach ($tags as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
</body>
</html>