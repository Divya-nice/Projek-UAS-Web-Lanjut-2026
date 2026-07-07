<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Relawan;
use App\Models\Kegiatan;

class BerandaController extends Controller
{
    public function index()
    {
        $totalKegiatan  = Kegiatan::count();
        $kegiatanAktif  = Kegiatan::where('status', 'Aktif')->count();

        $totalRelawan   = Relawan::count();
        $pendingRelawan = Relawan::where('status', 'Pending')->count();

        $kegiatanTerbaru  = Kegiatan::latest()->take(5)->get();
        $aktivitasRelawan = Relawan::latest()->take(3)->get();

        return view('admin.dashboard', compact(
            'totalKegiatan',
            'kegiatanAktif',
            'totalRelawan',
            'pendingRelawan',
            'kegiatanTerbaru',
            'aktivitasRelawan'
        ));
    }
}