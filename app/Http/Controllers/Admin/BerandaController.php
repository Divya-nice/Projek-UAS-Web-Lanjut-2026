<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\PendaftaranRelawan;

class BerandaController extends Controller
{
    public function index()
    {
        // Statistik kegiatan
        $totalKegiatan = Kegiatan::count();

        $kegiatanAktif = Kegiatan::where(
            'status',
            'Pendaftaran Dibuka'
        )->count();

        // Statistik relawan
        $totalRelawan = PendaftaranRelawan::count();

        $pendingRelawan = PendaftaranRelawan::where(
            'status',
            'Menunggu Verifikasi'
        )->count();

        $relawanDiterima = PendaftaranRelawan::where(
            'status',
            'Diterima'
        )->count();

        $relawanDitolak = PendaftaranRelawan::where(
            'status',
            'Ditolak'
        )->count();

        // Data terbaru
        $kegiatanTerbaru = Kegiatan::latest()->take(5)->get();

        $aktivitasRelawan = PendaftaranRelawan::with('kegiatan')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalKegiatan',
            'kegiatanAktif',
            'totalRelawan',
            'pendingRelawan',
            'relawanDiterima',
            'relawanDitolak',
            'kegiatanTerbaru',
            'aktivitasRelawan'
        ));
    }
}