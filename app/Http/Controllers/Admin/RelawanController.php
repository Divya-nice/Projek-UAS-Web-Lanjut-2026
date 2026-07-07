<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Relawan;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function index()
    {
        $relawan = Relawan::latest()->paginate(10);

        return view('admin.relawan.index', compact('relawan'));
    }

    public function create()
    {
        return view('admin.relawan.daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'           => 'required|string|max:255',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'email'          => 'required|email|max:255',
            'no_hp'          => 'required|string|max:20',
            'alamat'         => 'required|string',
            'alasan'         => 'required|string',
        ]);

        Relawan::create([
            'nama'          => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email'         => $request->email,
            'no_hp'         => $request->no_hp,
            'alamat'        => $request->alamat,
            'alasan'        => $request->alasan,
            'status'        => 'Pending',
        ]);

        return back()->with('success', 'Pendaftaran berhasil! Terima kasih, data kamu akan diverifikasi oleh admin.');
    }

    public function terima($id)
    {
        $relawan = Relawan::findOrFail($id);

        $relawan->update([
            'status' => 'Diterima'
        ]);

        return back()->with('success','Relawan berhasil diterima.');
    }

    public function tolak($id)
    {
        $relawan = Relawan::findOrFail($id);

        $relawan->update([
            'status' => 'Ditolak'
        ]);

        return back()->with('success','Relawan berhasil ditolak.');
    }
}