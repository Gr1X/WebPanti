<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Illuminate\Support\Facades\DB;

class VolunteerController extends Controller
{
    /**
     * Menampilkan halaman form pendaftaran volunteer berdasarkan bidang.
     *
     * @param string $bidang
     * @return \Illuminate\View\View
     */
    public function showRegisterForm($bidang)
    {
        // Validasi bidang yang diterima
        $bidangTersedia = ['kesehatan', 'pendidikan', 'sosial'];
        if (!in_array($bidang, $bidangTersedia)) {
            abort(404, 'Bidang tidak ditemukan.');
        }

        // Kirim bidang yang dipilih ke view
        return view('user.programComponent.registerRelawan', compact('bidang'));
    }

    /**
     * Menyimpan data volunteer ke database.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $bidang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request, $bidang)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:volunteer,email',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'motivation' => 'nullable|string|max:500',
        ]);

        // Pastikan bidang valid
        $bidangTersedia = ['kesehatan', 'pendidikan', 'sosial'];
        if (!in_array($bidang, $bidangTersedia)) {
            abort(404, 'Bidang tidak ditemukan.');
        }

        // Simpan data ke database
        Volunteer::create([
            'nama' => $validated['name'],
            'alamat' => $validated['address'],
            'no_telp' => $validated['phone'],
            'email' => $validated['email'],
            'gender' => $validated['gender'],
            'bidang' => $bidang,
            'catatan' => $validated['motivation'] ?? '',
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('program')->with('success', 'Pendaftaran berhasil! Terima kasih telah bergabung.');
    }

    public function showAllVolunteers()
    {
        // Ambil semua data volunteer
        $volunteers = Volunteer::all();
        $jumlahVol = Volunteer::count();

        // Hitung jumlah volunteer berdasarkan gender
        $genderCounts = Volunteer::select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->pluck('total', 'gender'); // Hasil: ['Laki-laki' => 3, 'Perempuan' => 5]

        // Hitung jumlah volunteer berdasarkan bidang
        $bidangCounts = Volunteer::select('bidang', DB::raw('count(*) as total'))
            ->groupBy('bidang')
            ->pluck('total', 'bidang'); // Hasil: ['dokter' => 2, 'sosial' => 4, 'pendidikan' => 6]

        // Kirim data ke view
        return view('admin.showvolunteer', compact('volunteers', 'jumlahVol', 'genderCounts', 'bidangCounts'));
    }

    public function destroy($id)
    {
        // Temukan volunteer berdasarkan ID
        $volunteer = Volunteer::findOrFail($id);
        
        // Hapus volunteer
        $volunteer->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.volunteers.index')->with('success', 'Volunteer berhasil dihapus.');
    }
}
