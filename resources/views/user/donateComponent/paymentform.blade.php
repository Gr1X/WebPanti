@extends('layout.app')

@section('content')
<div class="pt-48  pb-20 w-full flex justify-between ps-10">
    <!-- Informasi Campaign -->
    <div class="bg-white shadow-md rounded-lg p-6 self-center">
        <div class="flex items-center space-x-4">
            <!-- Gambar -->
            <div class="w-60 h-30">
                <img src="{{ asset('storage/' . $target->gambar) }}" alt="{{ $target->namaprogram }}" class="w-full h-full object-cover rounded-lg shadow-lg">
            </div>
            <!-- Detail Campaign -->
            <div class="px-4">
                <h2 class="text-sm text-gray-500 flex items-center gap-1">
                    <ion-icon name="heart-outline" class="text-lg text-red-500"></ion-icon>
                    Kamu akan menyumbangkan uangmu kepada campaign:
                </h2>
                <h2 class="text-2xl uppercase font-bold text-green-600">{{ $target->namaprogram }}</h2>
                <hr class="mt-2 border-t-2 border-gray-200">
            </div>
        </div>
    </div>

    <!-- Form Donasi -->
    <div class="bg-white shadow-md rounded-lg p-6 mx-auto w-1/2">
        <form action="{{ route('donation.confirm', $target->id) }}" method="POST">
            @csrf
            <!-- Input Nominal Donasi -->
            <div class="my-4">
                <label for="jumlah" class="block text-gray-700 font-semibold mb-2 text-lg">Jumlah Donasi</label>
                <div class="relative">
                    <span
                        class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 font-bold text-lg pointer-events-none">
                        Rp
                    </span>
                    <input
                        type="text"
                        id="jumlah"
                        name="jumlah"
                        class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="0"
                        required
                    />
                </div>
                @error('jumlah')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Button Pilihan Nominal -->     
            <div class="grid grid-cols-3 my-4 justify-center gap-4">
                <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="10000">10.000</button>
                <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="20000">20.000</button>
                <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="50000">50.000</button>
                <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="100000">100.000</button>
                <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="200000">200.000</button>
                <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="500000">500.000</button>
            </div>

            <!-- Input Catatan -->
            <div class="mb-4">
                <label for="notes" class="block text-gray-700 font-semibold mb-2 text-lg">Catatan (Opsional)</label>
                <textarea 
                    id="notes" 
                    name="notes" 
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" 
                    rows="3" 
                    placeholder="Tambahkan catatan (opsional)"
                ></textarea>
                @error('notes')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <label class="block text-gray-700 font-semibold mb-4 text-lg">Metode Pembayaran</label>
            <div class="border my-4 rounded-lg p-6">
                <!-- E-Wallet Section -->
                <div class="mb-6">
                    <h3 class="text-md font-bold text-gray-800 mb-3">Bank Transfer</h3>
                    <div class="space-y-4">
                        <!-- Bank BRI -->
                        <label class="flex items-center space-x-4">
                            <input 
                                type="radio" 
                                name="payment_method" 
                                value="bri" 
                                class="form-radio text-blue-600 focus:ring-blue-400"
                            >
                            <img 
                                src="{{ asset('images/bri.png') }}" 
                                alt="BRI" 
                                class="w-10 h-10 rounded-lg border shadow-md"
                            >
                            <span class="font-semibold text-gray-700">BRI</span>
                        </label>
            
                        <!-- Bank Mandiri -->
                        <label class="flex items-center space-x-4">
                            <input 
                                type="radio" 
                                name="payment_method" 
                                value="mandiri" 
                                class="form-radio text-blue-600 focus:ring-blue-400"
                            >
                            <img 
                                src="{{ asset('images/mandiri.png') }}" 
                                alt="Mandiri" 
                                class="w-10 h-10 rounded-lg border shadow-md"
                            >
                            <span class="font-semibold text-gray-700">Mandiri</span>
                        </label>
            
                        <!-- Bank BSI -->
                        <label class="flex items-center space-x-4">
                            <input 
                                type="radio" 
                                name="payment_method" 
                                value="bsi" 
                                class="form-radio text-blue-600 focus:ring-blue-400"
                            >
                            <img 
                                src="{{ asset('images/bsi.png') }}" 
                                alt="BSI" 
                                class="w-10 h-10 rounded-lg border shadow-md"
                            >
                            <span class="font-semibold text-gray-700">BSI</span>
                        </label>
                    </div>
                </div>
            </div>            
            
            <!-- Tombol Donasi -->
            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-green-500 to-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:from-green-600 hover:to-blue-600">
                Donasi Sekarang
            </button>
        </form>
    </div>
</div>

<!-- JavaScript untuk Interaktivitas -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.nominal-btn');
        const jumlahInput = document.getElementById('jumlah');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // Set nilai input ke nominal dari button
                const nominal = button.getAttribute('data-value');
                jumlahInput.value = nominal;

                // Ganti style button aktif
                buttons.forEach(btn => btn.classList.remove('bg-green-500', 'text-white'));
                button.classList.add('bg-green-500', 'text-white');
            });
        });
    });
</script>
@stop
