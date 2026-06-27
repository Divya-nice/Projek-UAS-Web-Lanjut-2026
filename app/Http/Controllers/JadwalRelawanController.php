<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalRelawanController extends Controller
{
    public function index()
    {
        $jadwals = [
            [
                'id' => 1,
                'judul'=>'Petualangan Membaca Bersama',
                'tanggal'=>'2026-06-30',
                'waktu'=>'08.00',
                'lokasi'=>'Aula Perpustakaan',
                'status'=>'Disetujui'
            ]
        ];
        return response()->json($jadwals);
    }
}
