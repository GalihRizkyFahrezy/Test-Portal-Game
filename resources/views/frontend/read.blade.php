<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/read.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <div class="title">
            {{$data[0]->title}}
        </div>
        <div class="penulis">
            Penulis : {{$data[0]->name}}
        </div>
        <div class="created">
            {{date('d-m-Y', strtotime($data[0]->created))}}
        </div>
        <br>
        <div class="photo">
            <img src="/maincontent/{{$data[0]->photo}}">
        </div>
        <br>
        <div>
            <p>
                {!! nl2br($data[0]->content) !!}
            </p>
        </div>
</html>