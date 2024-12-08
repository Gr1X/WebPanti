@extends('layout.app')

@section('content')
<div class="flex justify-center py-44 px-60">
    <div class="w-full max-w-md bg-slate-800 rounded-lg p-8">
        <h1 class="text-3xl font-bold text-white mb-6">Ubah Kata Sandi</h1>

        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <!-- Pesan Error atau Sukses -->
        @if (session('error'))
            <div class="bg-red-500 text-white p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Formulir Ubah Kata Sandi -->
        <form action="{{ route('password.update') }}" method="POST">
        @csrf
        @method('POST') <!-- Ensure this is correct -->
        <div class="mb-4">
            <label for="current_password" class="text-white block mb-2">Kata Sandi Lama</label>
            <input
                type="password"
                name="current_password"
                id="current_password"
                class="w-full p-2 rounded bg-slate-700 text-white"
            >
        </div>
        <div class="mb-4">
            <label for="new_password" class="text-white block mb-2">Kata Sandi Baru</label>
            <input
                type="password"
                name="new_password"
                id="new_password"
                class="w-full p-2 rounded bg-slate-700 text-white"
            >
        </div>
        <div class="mb-4">
            <label for="new_password_confirmation" class="text-white block mb-2">Konfirmasi Kata Sandi Baru</label>
            <input
                type="password"
                name="new_password_confirmation"
                id="new_password_confirmation"
                class="w-full p-2 rounded bg-slate-700 text-white"
            >
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white p-2 rounded">
            Perbarui Kata Sandi
        </button>
    </form>
    </div>
</div>
@stop
