<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif';

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'usia_alternatif',
        'sertifikat_alternatif',
        'pengalaman_alternatif',
        'bb_alternatif',
        'alamat'
    ];

    protected $hidden = [];
}
