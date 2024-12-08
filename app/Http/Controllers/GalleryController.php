<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Menampilkan halaman galeri dengan gambar berdasarkan tahun.
     *
     * @param  Request $request
     * @param  int|null $year
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $year = null)
    {
        // Jika tahun tidak dipilih, gunakan tahun saat ini
        $year = $year ?? now()->year;

        // Ambil gambar berdasarkan tahun
        $galleries = Gallery::whereYear('tgl_gallery', $year)->get();

        // Ambil daftar tahun unik dari tabel gallery
        $years = Gallery::selectRaw('YEAR(tgl_gallery) as year')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->pluck('year');

        // Kirim data ke view
        return view('user.gallery', compact('galleries', 'years', 'year'));
    }
}
