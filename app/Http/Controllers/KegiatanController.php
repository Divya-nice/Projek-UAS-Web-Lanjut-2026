<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return 
response()->json($kegiatan);
    }
}
