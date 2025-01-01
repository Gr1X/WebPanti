<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target; // Pastikan model Target sudah diimport
use Carbon\Carbon;

class UserProgramController extends Controller
{
    public function showDonations()
    {
        // Ambil data dari model Target dengan hanya donasi yang dikonfirmasi
        $targets = Target::with(['donasi' => function ($query) {
            $query->where('status', 'confirmed'); // Tambahkan filter status
        }])->withSum(['donasi as donasi_sum_jumlah' => function ($query) {
            $query->where('status', 'confirmed'); // Filter hanya donasi yang dikonfirmasi
        }], 'jumlah')->get();
    
        // Kirim data $targets ke view
        return view('user.donation', compact('targets'));
    }  

    public function showDonationDetails($id)
    {
        // Ambil data target dengan hanya donasi yang dikonfirmasi
        $target = Target::with(['donasi' => function ($query) {
            $query->where('status', 'confirmed'); // Hanya ambil donasi yang dikonfirmasi
        }])->withSum(['donasi as donasi_sum_jumlah' => function ($query) {
            $query->where('status', 'confirmed'); // Hitung hanya jumlah donasi yang dikonfirmasi
        }], 'jumlah')->withCount(['donasi as jumlah_donatur' => function ($query) {
            $query->where('status', 'confirmed'); // Hitung hanya donatur yang donasinya dikonfirmasi
        }])->findOrFail($id);

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

        // Kirim data ke view
        return view('user.donateComponent.detailsDonation', compact('target', 'terkumpul', 'persentase', 'donasiTersedia'));
    }
}

