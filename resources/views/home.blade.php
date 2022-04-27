<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>

    <div>
        @foreach ($movies as $el)
            <h2>{{$el['title']}}</h2>
            <h2>{{$el['original_title']}}</h2>
            <p>{{$el['nationality']}}</p>
            <p>{{$el['date']}}</p>
            <p>{{$el['vote']}}</p>
        @endforeach
    </div>

</body>
</html>