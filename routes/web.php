<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// routes/web.php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');


Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.destroy');
Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');


Route::get('/', function () {
    return view('welcome');
});
