<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3 class="row justify-content-center mt-3">BUAT POST BARU</h3>
                <form action="postcreatemaincontent" method="post" class="mt-5" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 d-flex">
                        <label for="title" class="form-label col-1">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div> 
                    <div class="mb-3 d-flex">
                        <label for="photo" class="form-label col-1">Thumbnail</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept=".jpg,.png" required>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="kategori" class="form-label col-1">Kategori</label>
                        <select class="form-select" aria-label="Default select example" id="kategori" name="category">
                            <option selected>Open this select menu</option>
                            @foreach($data as $row)
                            <option value="{{$row->id}}">{{$row->category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 d-flex">
                        <label for="content" class="form-label col-1">Content</label>
                        <textarea class="form-control" placeholder="Jangan lupa lihat basic html" name="content" id="content" style="height: 50vh"></textarea>
                    </div>
                    <input type="number" value="{{ Auth::user()->id }}" style="display: none;" name="id_penulis"> 

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>