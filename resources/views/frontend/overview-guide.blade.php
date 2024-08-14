<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="/css/overview-guide.css" rel="stylesheet">

<div class="d-flex justify-content-evenly">
@foreach($categories as $category)

<div class="canvas">
<div class="d-flex justify-content-center">
    
    <div class="tag">
        {{$category->category}}
    </div>
    <div class="line">
    </div>
</div>
@foreach (array_slice($data, 0, 4) as $row)
    @if($row->id_category == $category->id)
        <a href="/read/{{$row->id}}" class="recent-button">
            <div class="overview-parent d-flex">
                    <div class="overview-photo ms-1" style="background-image: url('maincontent/{{$row->photo}}');">
                    </div>
                <div class="ms-1">
                    <div class="overview-title">
                        {{$row->title}}
                    </div>
                    <div class="created">
                        {{date('d-m-Y', strtotime($row->created))}}
                    </div>
                </div>
            </div>
        </a>
    @endif

@endforeach
</div>
@endforeach
</div>