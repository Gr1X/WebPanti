<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Volunteer;

class ProfileController extends Controller
{
    /**
     * Show the user's profile.
     */
    public function index()
    {
        $user = Auth::user();
        
        // Ambil data donasi user dan urutkan dari yang terbaru
        $donasi = $user->donasi()->orderBy('waktu_donasi', 'desc')->get();
        
        // Periksa apakah pengguna adalah seorang volunteer
        $isVolunteer = Volunteer::where('email', $user->email)->exists();

        return view('auth.profile', compact('user', 'donasi', 'isVolunteer'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('auth.editprofile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'no_telp' => 'required|digits_between:10,13',
            'gambar' => 'nullable|image|max:2048', // Maksimal 2MB
        ]);

        // Update data
        $user->fill($validated);

        // Simpan gambar jika diunggah
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('profile_pictures', 'public');
            $user->gambar = $path;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }
}
