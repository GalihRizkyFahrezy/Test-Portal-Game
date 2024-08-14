<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/image.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <form action="/imageinsert" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex">
            <label for="image" class="form-label col-1">Gambar baru</label>
            <input type="file" class="form-control" id="image" name="name" accept=".jpg,.png" required>
            <button type="submit" class="btn btn-primary ms-2">Tambah</button>
        </div>
    </form>
        <div class="d-flex">
            @foreach($data as $row)
            <a href="http://127.0.0.1:8000/images/{{$row->name}}">
                <div class="card card-size m-1">
                    <div class="card-body">
                        <img src="images/{{$row->name}}" class="image-property">
                    </div>
                </div>
            </a>

            @endforeach
        </div>
        
    </div>
</body>
</html>