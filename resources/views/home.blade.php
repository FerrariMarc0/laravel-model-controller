<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>

    @foreach ($movies as $movie)
        <div class="card">
            <ul>
                <li>{{$movie->title}}</li>
            </ul>
        </div>
    @endforeach


</body>
</html>
