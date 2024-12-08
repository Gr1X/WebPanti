<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target;
use App\Models\Donasi;

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

        // Mengirim data ke view
        return view('user.landing', compact('totalTarget', 'totalDonasiTerkumpul', 'totalTransaksi'));
    }
}
