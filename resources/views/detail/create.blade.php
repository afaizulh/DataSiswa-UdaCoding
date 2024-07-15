@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card rounded-0 shadow-lg">
            <div class="card-body">
                <h1 class="d-flex justify-content-center my-3 mb-4 fw-bold text-primary">Tambahkan Siswa</h1>
                <form method="POST" action="{{ route('store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" aria-describedby="umurHelp" required>
                    <div id="umurHelp" class="form-text">Tuliskan dengan format angka "17"</div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenjang" class="form-label">Jenjang</label>
                    <select name="jenjang" id="jenjang" class="form-select" required>
                        <option selected disabled>Pilih Jenjang</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <a href="{{ route('home') }}">
            <button class="btn btn-success my-3"><- Kembali</button>
        </a>
    </div>
@endsection
