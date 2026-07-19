<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use App\Models\PendaftaranRelawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
    public function relawan()
    {
        $kegiatan = Kegiatan::orderBy('tanggal', 'asc')->get();

        return view('relawan.index', compact('kegiatan'));
    }
    
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
            'kuota_relawan' => 'required|integer|min:1',
            'status'        => 'required|in:Pendaftaran Dibuka,Pendaftaran Ditutup',
            'gambar'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'nama_kegiatan.required' => 'Nama kegiatan wajib diisi.',
            'deskripsi.required'     => 'Deskripsi wajib diisi.',
            'tanggal.required'       => 'Tanggal wajib diisi.',
            'jam_mulai.required'     => 'Jam mulai wajib diisi.',
            'lokasi.required'        => 'Lokasi wajib diisi.',
            'kuota_relawan.required' => 'Kuota relawan wajib diisi.',
            'kuota_relawan.integer'  => 'Kuota relawan harus berupa angka.',
            'kuota_relawan.min'      => 'Kuota relawan minimal 1.',
            'gambar.image'           => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes'           => 'Format gambar harus jpg, jpeg, atau png.',
            'gambar.max'             => 'Ukuran gambar maksimal 2MB.',
        ]);

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('kegiatan', 'public');
        }

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
            'tanggal'       => $request->tanggal,
            'jam_mulai'     => $request->jam_mulai,
            'lokasi'        => $request->lokasi,
            'kuota_relawan' => $request->kuota_relawan,
            'gambar'        => $gambarPath,
            'status'        => $request->status,
        ]);

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    public function show(int $id)
    {
        $item = Kegiatan::findOrFail($id);

        $jumlahDiterima = PendaftaranRelawan::where('kegiatan_id', $id)
            ->where('status', 'Diterima')
            ->count();

        $kuotaPenuh = $jumlahDiterima >= $item->kuota_relawan;

        $sisaKuota = max(0, $item->kuota_relawan - $jumlahDiterima);

        $sudahDaftar = false;
        $user = null;

        if (Auth::check()) {

            $sudahDaftar = PendaftaranRelawan::where('user_id', Auth::id())
                ->where('kegiatan_id', $id)
                ->exists();

            $user = Auth::user();
        }

        return view('relawan.show', compact(
            'item',
            'sudahDaftar',
            'kuotaPenuh',
            'sisaKuota',
            'user'
        ));
    }

    /**
     * Menampilkan form edit
     */
    public function edit(int $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('admin.kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Menyimpan hasil edit
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|max:255',
            'deskripsi'     => 'required',
            'tanggal'       => 'required|date',
            'jam_mulai'     => 'required',
            'lokasi'        => 'required|max:255',
            'kuota_relawan' => 'required|integer|min:1',
            'status'        => 'required|in:Pendaftaran Dibuka,Pendaftaran Ditutup',
            'gambar'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'nama_kegiatan.required' => 'Nama kegiatan wajib diisi.',
            'deskripsi.required'     => 'Deskripsi wajib diisi.',
            'tanggal.required'       => 'Tanggal wajib diisi.',
            'jam_mulai.required'     => 'Jam mulai wajib diisi.',
            'lokasi.required'        => 'Lokasi wajib diisi.',
            'kuota_relawan.required' => 'Kuota relawan wajib diisi.',
            'kuota_relawan.integer'  => 'Kuota relawan harus berupa angka.',
            'kuota_relawan.min'      => 'Kuota relawan minimal 1.',
            'gambar.image'           => 'File yang diunggah harus berupa gambar.',
            'gambar.mimes'           => 'Format gambar harus jpg, jpeg, atau png.',
            'gambar.max'             => 'Ukuran gambar maksimal 2MB.',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);

        $data = [
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi'     => $request->deskripsi,
            'tanggal'       => $request->tanggal,
            'jam_mulai'     => $request->jam_mulai,
            'lokasi'        => $request->lokasi,
            'kuota_relawan' => $request->kuota_relawan,
            'status'        => $request->status,
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kegiatan->gambar && Storage::disk('public')->exists($kegiatan->gambar)) {
                Storage::disk('public')->delete($kegiatan->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('kegiatan', 'public');
        }

        $kegiatan->update($data);

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Data kegiatan berhasil diperbarui.');
    }

    /**
     * Menghapus kegiatan
     */
    public function destroy(int $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->gambar && Storage::disk('public')->exists($kegiatan->gambar)) {
            Storage::disk('public')->delete($kegiatan->gambar);
        }

        $kegiatan->delete();

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil dihapus.');
    }

    public function jadwal()
    {
        $pendaftaran = PendaftaranRelawan::with('kegiatan')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('relawan.jadwal', compact('pendaftaran'));
    }
}