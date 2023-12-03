<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswas'));
    }

    public function create()
    {
        return view('form_mahasiswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|numeric',
            'nama' => 'required|string',
            'gender' => 'required|in:L,P',
            'konsentrasi' => 'required|string',
            'asal' => 'required|string',
        ]);
        $data = $request->except('_token');
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('form_mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|numeric',
            'nama' => 'required|string',
            'gender' => 'required|in:L,P',
            'konsentrasi' => 'required|string',
            'asal' => 'required|string',
        ]);
        $data = $request->except('_token');
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
