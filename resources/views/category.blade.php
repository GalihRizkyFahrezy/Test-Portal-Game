<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title> test</title>
</head>
<body>
    <div class="container mt-4">
        <form action="insertkategori" method="post">
        @csrf
        <div class="d-flex">
            <label for="kategori" class="form-label col-1">Kategori baru</label>
            <input type="text" class="form-control" id="kategori" name="category" required>
            <button type="submit" class="btn btn-primary ms-2">Tambah</button>
            </div>
        </form>
    <table class="table">
        <thead>
            <tr>
                <td>
                    ID
                </td>
                <td>
                    Kategori
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>
                    {{$row->id}}
                </td>
                <td>
                    {{$row->category}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>