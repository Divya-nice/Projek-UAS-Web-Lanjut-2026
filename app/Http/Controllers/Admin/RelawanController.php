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
        public function index(Request $request)
    {
        $keyword = $request->keyword;

        $relawan = PendaftaranRelawan::with('kegiatan')
            ->when($keyword, function ($query) use ($keyword) {
                $query->where('nama', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.relawan.index', compact('relawan', 'keyword'));
    }

    /**
     * Terima pendaftaran relawan
     */
    public function terima(int $id)
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
    public function tolak(int $id)
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