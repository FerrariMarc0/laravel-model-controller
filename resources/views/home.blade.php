<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/style.scss')
    <title>laravel-model-controller</title>
</head>
<body>
    <div class="container">
    @foreach ($movies as $movie)

            <div class="card">
                <h2>Title: {{$movie->title}}</h2>
                <h3>Original title: {{$movie->original_title}}</h3>
                <span>Nationality: {{$movie->nationality}}</span>
                <span>Release date: {{$movie->date}}</span>
                <span>Vote: {{$movie->vote}}</span>
            </div>

    @endforeach
    </div>

</body>
</html>
