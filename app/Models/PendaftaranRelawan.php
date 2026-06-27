<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranRelawan extends Model
{
    protected $table = 'pendaftaran_relawan';
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'kegiatan_id',
        'alasan',
        'status' 
    ];
}
