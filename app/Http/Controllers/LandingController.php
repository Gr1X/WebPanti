<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target;
use App\Models\Donasi;
use App\Models\BeritaPanti; // Tambahkan model BeritaPanti

class LandingController extends Controller
{
    public function index()
    {
        // Menghitung jumlah program (campaign)
        $totalTarget = Target::count();

        // Menghitung total donasi yang terkumpul
        $totalDonasiTerkumpul = Donasi::sum('jumlah');

        // Menghitung jumlah transaksi (total donasi)
        $totalTransaksi = Donasi::count();

        // Mengambil 4 program terbaru (sudah ada)
        $latestPrograms = Target::orderBy('created_at', 'desc')->take(4)->get();

        // Mengambil 3 berita terbaru berdasarkan tanggal_publikasi
        $latestNews = BeritaPanti::orderBy('tanggal_publikasi', 'desc')->take(3)->get();

        // Mengirim data ke view
        return view('user.landing', compact(
            'totalTarget', 
            'totalDonasiTerkumpul', 
            'totalTransaksi', 
            'latestPrograms', 
            'latestNews'
        ));
    }
}
