@extends('layout.app')

@section('content')
<div class="flex justify-center py-44 px-60">
    <div class="bg-slate-800 rounded-lg p-8 w-full max-w-md">
        <h2 class="text-white text-3xl font-bold mb-6">Ubah Kata Sandi</h2>
        <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <!-- Remove @method('PUT') since the route expects POST -->
        
        <!-- Password Lama -->
        <div class="mb-4">
            <label for="current_password" class="block text-white text-sm mb-2">Kata Sandi Lama</label>
            <input 
                type="password" 
                name="current_password" 
                id="current_password" 
                class="w-full p-3 rounded bg-gray-700 text-white"
                placeholder="Masukkan kata sandi lama"
                required
            />
            @error('current_password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password Baru -->
        <div class="mb-4">
            <label for="new_password" class="block text-white text-sm mb-2">Kata Sandi Baru</label>
            <input 
                type="password" 
                name="new_password" 
                id="new_password" 
                class="w-full p-3 rounded bg-gray-700 text-white"
                placeholder="Masukkan kata sandi baru"
                required
            />
            @error('new_password')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Konfirmasi Password -->
        <div class="mb-6">
            <label for="new_password_confirmation" class="block text-white text-sm mb-2">Konfirmasi Kata Sandi Baru</label>
            <input 
                type="password" 
                name="new_password_confirmation" 
                id="new_password_confirmation" 
                class="w-full p-3 rounded bg-gray-700 text-white"
                placeholder="Ulangi kata sandi baru"
                required
            />
            @error('new_password_confirmation')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-600 w-full p-3 rounded text-white font-bold hover:bg-blue-700">
            Simpan Perubahan
        </button>
    </form>
    </div>
</div>
@endsection
