<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target; // Pastikan model Target sudah diimport
use Carbon\Carbon;

class UserProgramController extends Controller
{
    public function showDonations()
    {
        // Ambil data dari model Target
        $targets = Target::withSum('donasi', 'jumlah')->get(); // Sesuaikan query dengan struktur database
    
        // Kirim data $targets ke view
        return view('user.donation', compact('targets'));
    }
  
    public function showDonationDetails($id)
    {
        // Ambil data target
        $target = Target::withSum('donasi', 'jumlah')->findOrFail($id);

        // Hitung jumlah terkumpul
        $terkumpul = $target->donasi_sum_jumlah ?? 0;

        // Hitung persentase
        $persentase = $target->jumlah_target > 0 ? round(($terkumpul / $target->jumlah_target) * 100, 2) : 0;

        // Tentukan apakah donasi masih bisa dilakukan
        $donasiTersedia = true; // Default, donasi diaktifkan
        $today = Carbon::now();
        if (!empty($target->tgl_mulai) && $today->lt(Carbon::parse($target->tgl_mulai))) {
            // Jika hari ini sebelum tgl_mulai
            $donasiTersedia = false;
        } elseif (!empty($target->tgl_selesai) && $today->gt(Carbon::parse($target->tgl_selesai))) {
            // Jika hari ini setelah tgl_selesai
            $donasiTersedia = false;
        }

        return view('user.donateComponent.detailsDonation', compact('target', 'terkumpul', 'persentase', 'donasiTersedia'));
    }
}

