@extends('layouts.app')

@section('content')
<div class="container-sm text-center" style="margin: auto;">
    <h2 class="tex-center" style="font-weight: 900;">Data Matakuliah</h2>
    <a href=matakuliah/create><button type="button" class="btn btn-primary">Create</button></a>
    <div class="tabel" style="margin-top:40px">
        @if(count($matakuliahs) > 0)
        <table class="table table-bordered table-striped" style="margin: 2em auto;" id_indra="tabel_barangkeluar">
            <thead>
                <tr>
                    <th>Nama Matkul</th>
                    <th>Dosen Pengampu</th>
                    <th>Bobot SKS</th>
                    <th>Kehadiran</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <!-- Tambahkan kolom-kolom lain jika diperlukan -->
                </tr>
            </thead>
            <tbody>
                @foreach($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $matakuliah->nama_matkul }}</td>
                    <td>{{ $matakuliah->dosen_pengampu }}</td>
                    <td>{{ $matakuliah->bobot_sks }}</td>
                    <td>{{ $matakuliah->kehadiran }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-center">Tidak ada data matakuliah.</p>
        @endif
    </div>
</div>
</div>
</div>
</div>
@endsection