<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kegiatan;

class PendaftaranRelawan extends Model
{
    protected $table = 'pendaftaran_relawan';

    protected $fillable = [
        'nama',
        'email',
        'jenis_kelamin',
        'nomor_telepon',
        'alamat',
        'alasan',
        'kegiatan_id',
        'status',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id_kegiatan');
    }
}