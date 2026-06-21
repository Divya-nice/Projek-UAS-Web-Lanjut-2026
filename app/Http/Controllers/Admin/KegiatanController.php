<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = [
            (object)[
                'id_kegiatan' => 1,
                'nama_kegiatan' => 'Gemar Membaca Buku',
                'tanggal' => '2025-07-10',
                'jam_mulai' => '08:00',
                'lokasi' => 'Pontianak'
            ],
            (object)[
                'id_kegiatan' => 2,
                'nama_kegiatan' => 'Kelas Ceria Anak',
                'tanggal' => '2025-07-15',
                'jam_mulai' => '09:00',
                'lokasi' => 'Kubu Raya'
            ]
        ];

        return view('admin.kegiatan.index', compact('kegiatan'));
    }
}