@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card rounded-0 shadow-lg">
            <div class="card-body">
                <h1 class="d-flex justify-content-center my-3 mb-4 fw-bold text-primary">Edit Data Siswa</h1>
                <form method="POST" action="{{ route('update', $dataSiswa->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ old('nama', $dataSiswa->nama) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" aria-describedby="umurHelp"
                            value="{{ old('umur', $dataSiswa->umur) }}" required>
                        <div id="umurHelp" class="form-text">Tuliskan dengan format angka "17"</div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat', $dataSiswa->alamat) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jenjang" class="form-label">Jenjang</label>
                        <select name="jenjang" id="jenjang" class="form-select" value="{{ $dataSiswa->jenjang }}" required>
                            <option selected disabled>Pilih Jenjang</option>
                            <option value="SD" {{ old('jenjang', $dataSiswa->jenjang) == 'SD' ? 'selected' : '' }}>SD
                            </option>
                            <option value="SMP" {{ old('jenjang', $dataSiswa->jenjang) == 'SMP' ? 'selected' : '' }}>SMP
                            </option>
                            <option value="SMA" {{ old('jenjang', $dataSiswa->jenjang) == 'SMA' ? 'selected' : '' }}>SMA
                            </option>
                            <option value="SMK" {{ old('jenjang', $dataSiswa->jenjang) == 'SMK' ? 'selected' : '' }}>SMK
                            </option>
                            <option value="D1" {{ old('jenjang', $dataSiswa->jenjang) == 'D1' ? 'selected' : '' }}>D1
                            </option>
                            <option value="D2" {{ old('jenjang', $dataSiswa->jenjang) == 'D2' ? 'selected' : '' }}>D2
                            </option>
                            <option value="D3" {{ old('jenjang', $dataSiswa->jenjang) == 'D3' ? 'selected' : '' }}>D3
                            </option>
                            <option value="S1" {{ old('jenjang', $dataSiswa->jenjang) == 'S1' ? 'selected' : '' }}>S1
                            </option>
                            <option value="S2" {{ old('jenjang', $dataSiswa->jenjang) == 'S2' ? 'selected' : '' }}>S2
                            </option>
                            <option value="S3" {{ old('jenjang', $dataSiswa->jenjang) == 'S3' ? 'selected' : '' }}>S3
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
