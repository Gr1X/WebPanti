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
     * @return \Illuminate\View\View
     */
    public function showPaymentForm($id)
    {
        $target = Target::findOrFail($id);
        return view('user.donateComponent.paymentForm', compact('target'));
    }

    /**
     * Menyimpan donasi ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitDonation(Request $request, $id)
    {
        $request->validate([
            'jumlah' => 'required|numeric|min:1',
            'notes' => 'nullable|string|max:255',
        ]);

        $donasi = new Donasi([
            'user_id' => Auth::id(),
            'jumlah' => $request->input('jumlah'),
            'notes' => $request->input('notes'),
            'program_id' => $id,
            'waktu_donasi' => now(),
        ]);

        $donasi->save();

        return redirect()->route('donateDetails', $id)
            ->with('success', 'Donasi berhasil dikirim. Terima kasih atas dukungan Anda!');
    }
}
