<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $fillable = [
        'id',
        'NIK',
        'Nama_Lengkap',
        'Alamat',
        'No_Hp',
        'Photo'
    ];
}
