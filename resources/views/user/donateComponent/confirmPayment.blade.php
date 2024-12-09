@extends('layout.app')

@section('content')
<div class="pt-44 flex justify-center items-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <!-- Instruksi Pembayaran -->
        <h1 class="text-center text-2xl font-semibold text-gray-800 mb-6">Instruksi Pembayaran</h1>
        <p class="text-center text-gray-600">Transfer sesuai nominal di bawah ini</p>
        <h2 class="text-center text-4xl font-bold text-gray-800 my-4">Rp {{ number_format($jumlah, 0, ',', '.') }}</h2>
        <p class="text-center text-gray-600">
            ke rekening <strong class="font-semibold">{{ ucfirst($payment_method) }}</strong><br>
            <span class="font-mono text-gray-800">101.00.0662668.1</span><br>
            atas nama <strong class="font-semibold">Yayasan Dompet Dhuafa Republika</strong>
        </p>

        <!-- Detail Transaksi -->
        <div class="mt-8">
            <h3 class="text-center text-lg font-semibold text-gray-800 mb-4">Detail Transaksi</h3>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div class="text-gray-600">ID Program</div>
                <div class="text-gray-800 font-mono text-right">{{ $target->id }}</div>

                <div class="text-gray-600">Nama Program</div>
                <div class="text-gray-800 font-mono text-right">{{ $target->namaprogram }}</div>

                <div class="text-gray-600">Jumlah Donasi</div>
                <div class="text-gray-800 font-mono text-right">Rp {{ number_format($jumlah, 0, ',', '.') }}</div>

                <div class="text-gray-600">Metode Pembayaran</div>
                <div class="text-gray-800 text-right">{{ ucfirst($payment_method) }}</div>

                <div class="text-gray-600">Catatan</div>
                <div class="text-gray-800 text-right">{{ $notes ?? '-' }}</div>
            </div>
        </div>

        <!-- Unggah Bukti dan Submit -->
        <div class="mt-8">
            <!-- Unggah Bukti -->
            <form action="{{ route('donation.submit', $target->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="jumlah" value="{{ $jumlah }}">
                <input type="hidden" name="payment_method" value="{{ $payment_method }}">
                <input type="hidden" name="notes" value="{{ $notes }}">
                <div class="mb-4">
                    <label for="gambar" class="block text-gray-700 font-semibold mb-2">Unggah Bukti Transfer</label>
                    <input
                        type="file"
                        id="gambar"
                        name="gambar"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        required
                    />
                    @error('gambar')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-green-500 to-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:from-green-600 hover:to-blue-600">
                    Submit Bukti Pembayaran
                </button>
            </form>
        </div>
    </div>
</div>
@stop
