<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim', 'nama', 'gender', 'konsentrasi', 'asal', 'matkul_id',
        // ...
    ];

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'matkul_id', 'id');
    }
}
