<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/recent-content.css" rel="stylesheet">

</head>
<body>

<div class="alert alert-warning mt-3" role="alert">
  Website masih dalam tahap beta dan akan di update berkala
</div>

        <div class="d-flex justify-content-center">
            <div class="tag">
                Upload Terbaru
            </div>
            <div class="line">

            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            
            @foreach (array_slice($data, 0, 8) as $row)
            <a href="/read/{{$row->id}}" class="recent-button">
                <div class="card recent m-2">
                    <div class="card-body">
                        <div>
                            <div class="photobox" style="background-image: url('maincontent/{{$row->photo}}');">
                                <span class="kategori">{{$row->category}}</span>
                            </div>
                        </div>
                        <div class="title">
                            {{$row->title}}
                        </div>
                        <div class="created">
                            {{date('d-m-Y', strtotime($row->created))}}
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
</body>
</html>