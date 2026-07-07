<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    protected $table = 'relawan';
    protected $primaryKey = 'id_relawan';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'email',
        'no_hp',
        'alamat',
        'alasan',
        'status',
    ];
}