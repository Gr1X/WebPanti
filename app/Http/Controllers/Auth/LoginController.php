<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\RateLimiter;
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
        // Rate limiting (contoh: maksimum 5 percobaan dalam 1 menit)
        $key = 'login_attempts_' . $request->ip() . '_' . strtolower($request->email);

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors([
                'email' => 'Too many login attempts. Please try again later.',
            ]);
        }

        // Validasi input
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6',
        ]);

        $email = strtolower($request->email);

        // Attempt login
        if (Auth::attempt(['email' => $email, 'password' => $request->password], $request->remember)) {
            // Reset login attempts on successful login
            RateLimiter::clear($key);

            // Log informasi login
            Log::info('User logged in: ' . $email);

            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Logout user lain jika ada sesi yang sama
            Auth::logoutOtherDevices($request->password);

            // Redirect ke halaman yang dimaksud
            return redirect()->intended(route('landing'))->with('success', 'Welcome back!');
        }

        // Jika gagal login
        RateLimiter::hit($key, 60); // Tambahkan satu hit pada rate limiter (1 menit)
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ])->withInput($request->only('email', 'remember'));
    }

    // Menangani logout
    public function logout(Request $request)
    {
        if (Auth::check()) {
            Log::info('User logged out: ' . Auth::user()->email);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
