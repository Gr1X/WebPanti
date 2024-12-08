<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani login pengguna
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|lowercase',
            'password' => 'required|min:6',
        ]);

        // Attempt login menggunakan kredensial
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Log untuk debugging
            Log::info('User logged in: ' . $request->email);

            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Jika berhasil login, arahkan ke dashboard
            return redirect()->intended(route('landing'))->with('success', 'Welcome back!');
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput($request->only('email', 'remember'));
    }

    // Menangani logout
    public function logout(Request $request)
    {
        Log::info('User logged out: ' . Auth::user()->email);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
