<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kegiatan;
use App\Models\User;

class PendaftaranRelawan extends Model
{
    protected $table = 'pendaftaran_relawan';

    protected $fillable = [
        'user_id',
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    

}