<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiAlternatif extends Model
{
    use HasFactory;

    protected $table = 'nilai_alternatif';

    protected $fillable = [
        'nama_alternatif',
        'N_usia',
        'N_sertifikat',
        'N_pengalaman',
        'N_bb',
        'NU_usia',
        'NU_sertifikat',
        'NU_pengalaman',
        'NU_bb',
        // 'N_utility',
        'N_total',
        'rank'
    ];

    protected $hidden = [];
}
