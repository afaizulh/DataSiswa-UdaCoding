@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card rounded-0 shadow-lg">
            <div class="card-body">
                <h1 class="d-flex justify-content-center my-3 mb-4 fw-bold text-primary">Detail {{$dataSiswa->nama}}</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenjang</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th>{{$dataSiswa->nama}}</th>
                            <th>{{$dataSiswa->umur}}</th>
                            <th>{{$dataSiswa->alamat}}</th>
                            <th>{{$dataSiswa->jenjang}}</th>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('edit', $dataSiswa->id)}}"><button class="btn btn-warning">Edit</button></a>
                    <p>Created By : {{$dataSiswa->createdBy->name}}</p>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center my-3">
            <a href="{{ route('home') }}">
                <button class="btn btn-success"><- Kembali</button>
            </a>
            <form method="POST" action="{{ route('delete', $dataSiswa->id) }}" enctype="multipart/form-data" class="ms-2">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
