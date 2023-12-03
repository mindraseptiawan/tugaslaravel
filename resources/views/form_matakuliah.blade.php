<!-- resources/views/form_mahasiswa.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card-body">
    <div class="card-header text-white bg-secondary">
        <h1>Formulir Matakuliah</h1>
    </div>
    <div class="card-body">
        <form action="{{ isset($matakuliah) ? route('matakuliah.update', $matakuliah->id) : route('matakuliah.store') }}" method="POST">
            @csrf
            @if(isset($matakuliah))
            @method('PUT')
            @endif

            <div class="mb-3 row">
                <label for="nama_matkul" class="col-sm-2 col-form-label">Nama Matakuliah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="{{ isset($matakuliah) ? $matakuliah->nama_matkul : old('nama_matkul') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="dosen_pengampu" class="col-sm-2 col-form-label">Dosen Pengampu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dosen_pengampu" name="dosen_pengampu" value="{{ isset($matakuliah) ? $matakuliah->dosen_pengampu : old('dosen_pengampu') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="bobot_sks" class="col-sm-2 col-form-label">Bobot SKS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bobot_sks" name="bobot_sks" value="{{ isset($matakuliah) ? $matakuliah->bobot_sks : old('bobot_sks') }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kehadiran" class="col-sm-2 col-form-label">Kehadiran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kehadiran" name="kehadiran" value="{{ isset($matakuliah) ? $matakuliah->kehadiran : old('kehadiran') }}">
                </div>
            </div>

            <!-- Tambahkan input untuk kolom-kolom lain jika diperlukan -->

            <button type="submit" class="btn btn-primary">{{ isset($matakuliah) ? 'Update' : 'Tambah' }}</button>
        </form>
    </div>
    @if(isset($matakuliah))
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
    @endif

    @error('nama')
    <div class="alert alert-danger mt-3">{{ $message }}</div>
    @enderror
</div>
@endsection