<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranRelawan;

class PendaftaranRelawanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'email'           => 'required|email|max:255',
            'jenis_kelamin'   => 'required',
            'no_hp'           => 'required|string|max:20',
            'alamat'          => 'required|string',
            'alasan'          => 'required|string',
            'kegiatan_id'     => 'required',
        ]);

        PendaftaranRelawan::create([
            'nama'            => $request->nama,
            'email'           => $request->email,
            'jenis_kelamin'   => $request->jenis_kelamin,
            'nomor_telepon'   => $request->no_hp,
            'alamat'          => $request->alamat,
            'alasan'          => $request->alasan,
            'kegiatan_id'     => $request->kegiatan_id,
            'status'          => 'Menunggu Verifikasi',
        ]);

        return back()->with(
            'success',
            'Pendaftaran berhasil! Data Anda akan diverifikasi oleh admin.'
        );
    }
}