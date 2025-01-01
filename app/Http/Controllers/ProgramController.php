<?php

namespace App\Http\Controllers;

use App\Models\BeritaPanti;

class ProgramController extends Controller
{
    public function index()
    {
        // Ambil semua berita program dari database
        $berita = BeritaPanti::orderBy('tanggal_publikasi', 'desc')->get();

        // Kirim data ke view
        return view('user.program', compact('berita'));
    }
}
