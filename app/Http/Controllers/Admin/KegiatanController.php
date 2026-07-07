<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Menampilkan semua data kegiatan
     */
    public function index()
    {
        $kegiatan = Kegiatan::orderBy('tanggal', 'desc')->paginate(10);

        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Menampilkan form tambah kegiatan
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Menyimpan data kegiatan
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'deskripsi'     => 'required',
            'tanggal'       => 'required|date',
            'jam_mulai'     => 'required',
            'lokasi'        => 'required|max:255',
        ],[
            'nama_kegiatan.required' => 'Nama kegiatan wajib diisi.',
            'deskripsi.required'     => 'Deskripsi wajib diisi.',
            'tanggal.required'       => 'Tanggal wajib diisi.',
            'jam_mulai.required'     => 'Jam mulai wajib diisi.',
            'lokasi.required'        => 'Lokasi wajib diisi.',
        ]);

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
            'tanggal'       => $request->tanggal,
            'jam_mulai'     => $request->jam_mulai,
            'lokasi'        => $request->lokasi,
            'status'        => 'Aktif',
        ]);

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit
     */
    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Menyimpan hasil edit
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'deskripsi'     => 'required',
            'tanggal'       => 'required|date',
            'jam_mulai'     => 'required',
            'lokasi'        => 'required|max:255',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);

        $kegiatan->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
            'tanggal'       => $request->tanggal,
            'jam_mulai'     => $request->jam_mulai,
            'lokasi'        => $request->lokasi,
        ]);

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Data kegiatan berhasil diperbarui.');
    }

    /**
     * Menghapus kegiatan
     */
    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $kegiatan->delete();

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil dihapus.');
    }
}