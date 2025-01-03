<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna terautentikasi
        if (!$request->user()) {
            // Arahkan pengguna ke halaman login
            return redirect($this->redirectTo($request));
        }

        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request): string
    {
        // Jika permintaan bukan JSON, arahkan ke rute login
        if (!$request->expectsJson()) {
            try {
                return route('login'); // Pastikan rute 'login' sudah terdaftar
            } catch (\Exception $e) {
                return '/fallback-login'; // Fallback jika rute 'login' tidak ditemukan
            }
        }

        // Jika permintaan JSON, kembalikan respon kosong atau pesan error
        return '/fallback-login';
    }
}
