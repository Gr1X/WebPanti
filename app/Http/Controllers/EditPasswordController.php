<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EditPasswordController extends Controller
{
    public function edit()
    {
        return view('auth.ubahpassword');
    }

    public function update(Request $request)
    {
        $user = Auth::user(); 

        $validated = $request->validate([
            'current_password' => 'required', // Kata sandi lama harus diisi
            'new_password' => [
                'required',
                'min:6', // Minimal panjang password adalah 6 karakter
                'confirmed', // Pastikan new_password_confirmation cocok dengan new_password
            ],
        ], [
            'new_password.required' => 'Kata sandi baru harus diisi.',
            'new_password.min' => 'Kata sandi baru harus minimal 6 karakter.',
            'new_password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.',
        ]);

        // Periksa apakah kata sandi lama cocok
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->with('error', 'Kata sandi lama salah.');
        }

        // Perbarui kata sandi
        $user->password = Hash::make($validated['new_password']);
        $user->save();

        return back()->with('success', 'Kata sandi berhasil diperbarui.');
    }
}
