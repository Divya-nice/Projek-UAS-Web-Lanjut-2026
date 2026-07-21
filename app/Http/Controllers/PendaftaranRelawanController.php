<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PendaftaranRelawan;

class PendaftaranRelawanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama'            => 'required|string|max:255',
            'email'           => 'required|email|max:255',
            'jenis_kelamin'   => 'required',
            'no_hp'           => 'required|regex:/^[0-9]{10,15}$/',
            'alamat'          => 'required|string',
            'alasan'          => 'required|string',
            'kegiatan_id'     => 'required',
        ], [
            'no_hp.regex'     => 'Nomor HP harus terdiri dari 10 sampai 15 angka.',
        ]);

        $kegiatan = \App\Models\Kegiatan::findOrFail($request->kegiatan_id);

        if ($kegiatan->status !== 'Pendaftaran Dibuka') {
            return back()->with(
                'error',
                'Maaf, pendaftaran untuk kegiatan ini sudah ditutup.'
            );
        }

        $jumlahDiterima = PendaftaranRelawan::where('kegiatan_id', $request->kegiatan_id)
            ->where('status', 'Diterima')
            ->count();

        if ($jumlahDiterima >= $kegiatan->kuota_relawan) {
            return back()->with(
                'error',
                'Maaf, kuota relawan untuk kegiatan ini sudah penuh.'
            );
        }

        // Cek apakah user sudah pernah mendaftar pada kegiatan ini
        $sudahDaftar = PendaftaranRelawan::where('user_id', Auth::id())
            ->where('kegiatan_id', $request->kegiatan_id)
            ->exists();

        if ($sudahDaftar) {
            return redirect()
                ->back()
                ->with('error', 'Anda sudah pernah mendaftar pada kegiatan ini.');
        }

        PendaftaranRelawan::create([
            'user_id'         => Auth::id(),
            'nama'            => $request->nama,
            'email'           => $request->email,
            'jenis_kelamin'   => $request->jenis_kelamin,
            'nomor_telepon'   => $request->no_hp,
            'alamat'          => $request->alamat,
            'alasan'          => $request->alasan,
            'kegiatan_id'     => $request->kegiatan_id,
            'status'          => 'Menunggu Verifikasi',
        ]);

        return redirect()->route('relawan.sukses');
    }
}