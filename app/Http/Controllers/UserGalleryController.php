<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class UserGalleryController extends Controller
{
    /**
     * Menampilkan halaman galeri untuk user.
     */
    public function index()
    {
        // Mendapatkan semua data gambar dari tabel gallery
        $galleries = Gallery::all();

        // Mengirim data ke view
        return view('user.gallery', compact('galleries'));
    }
}