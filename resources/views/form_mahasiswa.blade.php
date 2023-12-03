<!-- resources/views/form_mahasiswa.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="card-header text-white bg-secondary">
        <h1>Formulir Mahasiswa</h1>
    </div>
    <div class="card-body">
        <form action="{{ isset($mahasiswa) ? route('mahasiswa.update', $mahasiswa->id) : route('mahasiswa.store') }}" method="POST">
            @csrf
            @if(isset($mahasiswa))
            @method('PUT')
            @endif

            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ isset($mahasiswa) ? $mahasiswa->nim : old('nim') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($mahasiswa) ? $mahasiswa->nama : old('nama') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select class="form-control" id="gender" name="gender">
                        <option value="L" {{ (isset($mahasiswa) && $mahasiswa->gender == 'L') ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="P" {{ (isset($mahasiswa) && $mahasiswa->gender == 'P') ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="konsentrasi" class="col-sm-2 col-form-label">Konsentrasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="konsentrasi" name="konsentrasi" value="{{ isset($mahasiswa) ? $mahasiswa->konsentrasi : old('konsentrasi') }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="asal" name="asal" value="{{ isset($mahasiswa) ? $mahasiswa->asal : old('asal') }}">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($mahasiswa) ? 'Update' : 'Tambah' }}</button>
        </form>
    </div>

    @if(isset($mahasiswa))
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    @endif

    @error('nama')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror
</div>
@endsection