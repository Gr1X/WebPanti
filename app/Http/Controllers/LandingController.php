<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target;
use App\Models\Donasi;
use App\Models\Gallery;
use App\Models\BeritaPanti; // Tambahkan model BeritaPanti

class LandingController extends Controller
{
  public function index()
{
    // Menghitung jumlah program (campaign)
    $totalTarget = Target::count();

    // Menghitung total donasi yang terkumpul (hanya yang dikonfirmasi)
    $totalDonasiTerkumpul = Donasi::where('status', 'confirmed')->sum('jumlah');

    // Menghitung jumlah transaksi (hanya transaksi yang dikonfirmasi)
    $totalTransaksi = Donasi::where('status', 'confirmed')->count();

    // Mengambil 4 program terbaru dengan jumlah donasi yang terkumpul (filter confirmed)
    $latestPrograms = Target::with(['donasi' => function ($query) {
        $query->where('status', 'confirmed');
    }])
    ->get()
    ->map(function ($program) {
        $program->donasi_sum_jumlah = $program->donasi->sum('jumlah');
        $program->terkumpul = $program->donasi_sum_jumlah ?? 0;
        $program->persentase = $program->jumlah_target > 0 ? round(($program->terkumpul / $program->jumlah_target) * 100, 2) : 0;
        return $program;
    })
    ->take(4);

    // Mengambil 3 berita terbaru berdasarkan tanggal_publikasi
    $latestNews = BeritaPanti::orderBy('tanggal_publikasi', 'desc')->take(3)->get();

    // Mengambil 3 foto galeri terbaru
    $latestGallery = Gallery::orderBy('tgl_gallery', 'desc')->take(3)->get();

    // Mengirim data ke view
    return view('user.landing', compact(
        'totalTarget', 
        'totalDonasiTerkumpul', 
        'totalTransaksi', 
        'latestPrograms', 
        'latestNews',
        'latestGallery'
    ));
  }
}  
