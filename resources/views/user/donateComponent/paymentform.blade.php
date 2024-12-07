@extends('layout.app')

@section('content')
<div class="pt-56 pb-20 w-full flex justify-center items-center">
    <div class="w-96 bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Donasi untuk: {{ $target->namaprogram }}</h2>

        <form action="{{ route('donation.submit', $target->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="jumlah" class="block text-gray-700 font-medium mb-2">Jumlah Donasi</label>
                <input type="number" id="jumlah" name="jumlah" class="w-full px-3 py-2 border rounded" placeholder="Masukkan nominal donasi" required min="1">
                @error('jumlah')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="notes" class="block text-gray-700 font-medium mb-2">Catatan (Opsional)</label>
                <textarea id="notes" name="notes" class="w-full px-3 py-2 border rounded" rows="3" placeholder="Tambahkan catatan (opsional)"></textarea>
                @error('notes')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                Donasi Sekarang
            </button>
        </form>
    </div>
</div>
@stop
