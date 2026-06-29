<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Relawan;

class RelawanController extends Controller
{
    public function index()
    {
        $relawan = Relawan::latest()->paginate(10);

        return view('admin.relawan.index', compact('relawan'));
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
