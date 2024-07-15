@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="mx-3 my-4">
                    <h1 class="fw-bold">Hai {{$user->name}}!</h1>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card py-2 px-3">Total Siswa : {{ $dataSiswa->count()}}</p>
                        <a href="{{route('create')}}"><button class="btn btn-light">+ Tambah Siswa</button></a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="card my-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover rounded">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Jenjang</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $number = 1; // Inisialisasi variabel counter
                            @endphp
    
                            @foreach ($dataSiswa as $data)
                                <tr>
                                    <th scope="row">{{ $number }}</th>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jenjang }}</td>
                                    <td><a href="{{ route('detail', $data->id) }}" class="btn btn-success">Detail</a></td>
                                </tr>
                                @php
                                    $number++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <style>
        .card.bg-primary {
            background-color: #007bff !important;
        }
    
        .card.bg-primary .card-body {
            color: #ffffff !important;
        }
    
        .table thead.bg-secondary {
            background-color: #6c757d !important;
        }
    
        .table thead th {
            color: #ffffff !important;
        }
    
        .btn-light {
            background-color: #f8f9fa !important;
            color: #212529 !important;
        }
    </style> --}}
@endsection
