<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    /**
     * Menampilkan form pembayaran donasi.
     *
     * @param  int  $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showPaymentForm($id)
    {
        // Ambil data target donasi berdasarkan ID
        $target = Target::findOrFail($id);

        // Return view form pembayaran
        return view('user.donateComponent.paymentForm', compact('target'));
    }

    /**
     * Menampilkan konfirmasi pembayaran donasi.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function submitPaymentConfirm(Request $request, $id)
    {
        // Validasi input dari form pembayaran
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'payment_method' => 'required|string',
            'notes' => 'nullable|string|max:255',
        ]);

        // Cari target donasi berdasarkan ID
        $target = Target::findOrFail($id);

        // Kirim data ke view konfirmasi pembayaran
        return view('user.donateComponent.confirmPayment', [
            'target' => $target,
            'jumlah' => $request->input('jumlah'),
            'payment_method' => $request->input('payment_method'),
            'notes' => $request->input('notes'),
        ]);
    }

    /**
     * Menyimpan donasi ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitDonation(Request $request, $programId)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required|numeric|min:1000',
            'payment_method' => 'required|string',
            'gambar' => 'required|image|max:10240',
            'notes' => 'nullable|string',
        ]);
        // dd($request->all()); // Tambahkan ini untuk melihat apakah 'jumlah' dikirimkan

        // Cek apakah user login atau donasi anonim
        $userId = auth()->check() ? auth()->id() : null;

        // Simpan data donasi ke database
        Donasi::create([
            'program_id' => $programId,
            'user_id' => $userId ?: null,
            'jumlah' => $validatedData['jumlah'],
            'tipe_pembayaran' => $validatedData['payment_method'],
            'notes' => $validatedData['notes'] ?? null,
            'gambar' => $request->file('gambar')->store('proofs', 'public'),
            'waktu_donasi' => now()
        ]);

        return redirect()->route('donateDetails', $programId)
            ->with('success', 'Donasi berhasil dikirim. Menunggu konfirmasi admin.');
    }
}
