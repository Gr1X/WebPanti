<?php

namespace App\Http\Controllers;
use App\Models\BeritaPanti;
use Illuminate\Http\Request;

class BeritaPantiController extends Controller
{
    public function details($id)
    {
        // Ambil berita berdasarkan ID
        $berita = BeritaPanti::findOrFail($id);

        // Tampilkan view dengan data berita
        return view('user.programComponent.detailBerita', compact('berita'));
    }
}
