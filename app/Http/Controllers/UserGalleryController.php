<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class UserGalleryController extends Controller
{
public function index(Request $request)
{
      // Ambil tahun dari query string
        $year = $request->query('year');

        // Jika ada filter tahun, gunakan untuk memfilter data
        $galleries = Gallery::query();

        if ($year) {
            $galleries->whereYear('tgl_gallery', $year);
        }

        $galleries = $galleries->get();

        return view('user.gallery', [
            'galleries' => $galleries,
            'year' => $year, // Untuk mengetahui tahun yang aktif di tombol filter
        ]);
    }  
}
