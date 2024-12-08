<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;

class ResetPasswordController extends Controller
{
    // Menampilkan form reset password
    public function showResetForm(Request $request, $token)
    {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    // Menangani proses reset password
    public function passwordReset(Request $request)
    {
        // Validasi input
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed'],
        ]);

        // Melakukan reset password
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password), // Hash password baru
                ])->setRememberToken(Str::random(60)); // Generate remember token baru
                
                $user->save(); // Simpan perubahan
                
                event(new PasswordReset($user)); // Trigger event PasswordReset
            }
        );

        // Redirect berdasarkan status reset
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status)) // Redirect ke login jika sukses
            : back()->withErrors(['email' => [__($status)]]); // Tampilkan error jika gagal
    }
}
