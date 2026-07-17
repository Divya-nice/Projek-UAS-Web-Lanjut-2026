<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendaftaranRelawan;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    /**
     * Menampilkan semua pendaftaran relawan
     */
    public function index()
    {
        $relawan = PendaftaranRelawan::with('kegiatan')
            ->latest()
            ->paginate(10);

        return view('admin.relawan.index', compact('relawan'));
    }

    /**
     * Terima pendaftaran relawan
     */
    public function terima($id)
    {
        $relawan = PendaftaranRelawan::findOrFail($id);

        $relawan->update([
            'status' => 'Diterima'
        ]);

        return back()->with(
            'success',
            'Pendaftaran relawan berhasil diterima.'
        );
    }

    /**
     * Tolak pendaftaran relawan
     */
    public function tolak($id)
    {
        $relawan = PendaftaranRelawan::findOrFail($id);

        $relawan->update([
            'status' => 'Ditolak'
        ]);

        return back()->with(
            'success',
            'Pendaftaran relawan berhasil ditolak.'
        );
    }
}