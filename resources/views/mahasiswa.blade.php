@extends('layouts.app')

@section('content')
<div class="container-sm text-center" style="margin: auto;">
    <h2 class="tex-center" style="font-weight: 900;">Data Mahasiswa</h2>
    <a href=mahasiswa/create><button type="button" class="btn btn-primary">Create</button></a>
    <div class="tabel" style="margin-top:40px">
        @if(count($mahasiswas) > 0)
        <table class="table table-bordered table-striped" style="margin: 2em auto;" id_indra="tabel_barangkeluar">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Gender</th>
                    <th>Konsentrasi</th>
                    <th>Asal</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->gender }}</td>
                    <td>{{ $mahasiswa->konsentrasi }}</td>
                    <td>{{ $mahasiswa->asal }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
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
        <p class="text-center">Tidak ada data mahasiswa.</p>
        @endif
    </div>
</div>
</div>
</div>
</div>
@endsection