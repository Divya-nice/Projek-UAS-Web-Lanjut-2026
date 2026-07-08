<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $primaryKey = 'id_kegiatan';

    protected $fillable = [
        'nama_kegiatan',
        'deskripsi',
        'tanggal',
        'jam_mulai',
        'lokasi',
        'kuota_relawan',
        'gambar',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}