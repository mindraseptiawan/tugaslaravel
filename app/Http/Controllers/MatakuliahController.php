<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah', compact('matakuliahs'));
    }

    public function create()
    {
        return view('form_matakuliah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required|string',
            'dosen_pengampu' => 'required|string',
            'bobot_sks' => 'required|numeric',
            'kehadiran' => 'required|numeric',
        ]);
        $data = $request->except('_token');
        Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index')->with('success', 'Data matakuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('form_matakuliah', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matkul' => 'required|string',
            'dosen_pengampu' => 'required|string',
            'bobot_sks' => 'required|numeric',
            'kehadiran' => 'required|numeric',
        ]);
        $data = $request->except('_token');
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Data matakuliah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data matakuliah berhasil dihapus.');
    }
}
