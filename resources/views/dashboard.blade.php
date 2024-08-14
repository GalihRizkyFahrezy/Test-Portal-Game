<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="btn btn-primary" href="/createmaincontent">new content</a>
                    <a class="btn btn-primary" href="/kategori">kategori</a>
                    <a class="btn btn-primary" href="/image">new content</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Penulis</td>
                                <td>Judul</td>
                                <td>Category</td>
                                <td>Tanggal Buat</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->title}}</td>
                                    <td>{{$row->category}}</td>
                                    <td>{{$row->created}}</td>
                                    <td>
                                        <a class="btn btn-info" href="/editmaincontent/{{$row->id}}">
                                            Edit
                                        </a>
                                        <a class="btn btn-danger" href="/deletecreatemaincontent/{{$row->id}}">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
