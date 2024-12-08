@extends('layout.app')

@section('content')
<div class="flex justify-center py-44 px-60">
    <div class="bg-slate-800 rounded-lg p-6 w-full">
        <h1 class="text-white text-3xl font-bold mb-6">Edit Profil</h1>
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4">
                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block text-white text-lg mb-2">Nama Lengkap</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                           class="w-full p-3 rounded bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-white text-lg mb-2">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                           class="w-full p-3 rounded bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label for="no_telp" class="block text-white text-lg mb-2">Nomor Telepon</label>
                    <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp', $user->no_telp) }}" 
                           class="w-full p-3 rounded bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
                </div>

                <!-- Gambar Profil -->
                <div>
                    <label for="gambar" class="block text-white text-lg mb-2">Gambar Profil</label>
                    @if ($user->gambar)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $user->gambar) }}" alt="Current Profile Picture" 
                                 class="h-24 w-24 rounded-full object-cover">
                        </div>
                    @endif
                    <input type="file" name="gambar" id="gambar" 
                           class="w-full p-3 rounded bg-slate-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
                    <p class="text-gray-400 text-sm mt-1">Format yang diizinkan: JPG, PNG, maksimal 2MB.</p>
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-end">
                    <button type="submit" 
                            class="px-6 py-3 bg-sky-500 text-white text-lg font-bold rounded hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-sky-500">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
