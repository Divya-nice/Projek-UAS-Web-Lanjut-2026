<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranRelawan;

class PendaftaranRelawanController extends Controller
{
    public function store(Request
    $request)
    {
        PendaftaranRelawan::create([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'kegiatan_id'=> $request->kegiatan_id,
            'alasan' => $request->alasan,
            'status' => 'menunggu'
        ]);
        return back()->with('success', 'Pendaftaran berhasil!');
        }
}