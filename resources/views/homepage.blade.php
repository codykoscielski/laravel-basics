<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is a blade template</h1>
    <h1>Home Page</h1><a href="/about">View about</a>
    <p>{{ 20 + 30 }}</p>
    <h3>{{$name}} and {{$catname}}</h3>
    <ul>
        @foreach ($allAniams as $animal)
            <li>{{$animal}}</li>
        @endforeach
    </ul>
</body>
</html>