@extends('layout.detailApp')

@section('content')
<div class="m-5">
    <div class="">
        <div class="flex justify-start items-center mb-4">
            <a href="{{ route('donation') }}" class="text-lg font-semibold flex items-center my-4 py-3 px-2">
                <ion-icon name="chevron-back-outline" class="mr-1 text-xl"></ion-icon>
                Back to previous
            </a>
        </div>
    </div>

    <div class="m-10">
        <div class="">
            <label class="flex items-center text-gray-600"><a href="" class="">Program</a><ion-icon name="chevron-forward-outline" class="size-4 "></ion-icon><span class="">Donate</span></label>
            <span class="text-4xl text-custom-50 font-bold">Donate</span>
        </div>

        
        <div class="w-full flex justify-between gap-6 mt-8">
            <!-- Informasi Campaign -->
            <div class="w-2/3 items-center">
                <div class="">
                    <div class="h-30">
                        <img src="{{ asset('storage/' . $target->gambar) }}" alt="{{ $target->namaprogram }}" class="w-full h-full object-cover rounded-lg shadow-lg">
                    </div>
                    <div class="items-center space-x-4 bg-white shadow-md rounded-xl p-6 self-center mt-2">
                        <div class="px-4">
                            <h2 class="text-md text-gray-500 flex items-center gap-2 mb-2">
                                <ion-icon name="heart" class="text-xl text-red-500 size-5"></ion-icon>
                                Kamu akan menyumbangkan uangmu kepada campaign:
                            </h2>
                            <h2 class="text-2xl uppercase font-bold text-custom-50 mx-4">{{ $target->namaprogram }}</h2>
                            <hr class="mt-2 border-t-2 border-gray-200">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border border-dashed border-4 border-custom-200 rounded-xl w-1/2 p-4">
                <div class="bg-white shadow-md border border-gray-200 rounded-xl p-6 space-y-2">
                    <form action="{{ route('donation.confirm', $target->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Input Nominal Donasi -->
                        <div class="my-4">
                            <label for="jumlah" class="block text-custom-50 font-bold mb-2 text-xl">Jumlah Donasi</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 font-bold text-lg pointer-events-none">
                                    Rp
                                </span>
                                <input
                                    type="text"
                                    id="jumlah"
                                    name="jumlah"
                                    class="pl-10 w-full px-3 py-2 border @error('jumlah') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-custom-300 focus:outline-custom-300 focus:border-0"
                                    placeholder="0"
                                    value="{{ old('jumlah') }}"
                                />
    
                                <!-- Input hidden untuk menyimpan nilai asli -->
                                <input type="hidden" id="jumlah_asli" name="jumlah" value="{{ old('jumlah') }}">
                            </div>
                            @error('jumlah')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
    
                        <!-- Tombol Pilihan Nominal -->
                        <div class="grid grid-cols-3 my-4 justify-center gap-2">
                            <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="10000">10.000</button>
                            <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="20000">20.000</button>
                            <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="50000">50.000</button>
                            <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="100000">100.000</button>
                            <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="200000">200.000</button>
                            <button type="button" class="nominal-btn border py-2 px-6 rounded-lg" data-value="500000">500.000</button>
                        </div>
                        
    
                        <!-- Input Catatan -->
                        <div class="mb-4">
                            <label for="notes" class="block text-custom-50 font-semibold mb-2 text-lg">Catatan (Opsional)</label>
                            <textarea 
                                id="notes" 
                                name="notes" 
                                class="w-full px-3 py-2 border @error('notes') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-custom-300  focus:outline-custom-300 focus:border-0" 
                                rows="3" 
                                placeholder="Tambahkan catatan (opsional)"
                            >{{ old('notes') }}</textarea>
                            @error('notes')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
            
                        <!-- Metode Pembayaran -->
                        <label class="block text-custom-50 font-semibold mb-2 text-lg">Metode Pembayaran</label>
                        <div class="@error('payment_method') border-red-500 @else border-gray-300 @enderror">
                            <div class="mb-6">
                                <div class="space-y-4">
                                    <!-- Bank BRI -->
                                    <label class="flex items-center space-x-4">
                                        <input type="radio" name="payment_method" value="bri" class="form-radio text-custom-300 focus:ring-custom-300" @if(old('payment_method') == 'bri') checked @endif>
                                        <img src="{{ asset('images/bri.png') }}" alt="BRI" class="w-10 h-10 rounded-lg border shadow-md">
                                        <span class="font-semibold text-gray-700">BRI</span>
                                    </label>
                                    <!-- Bank Mandiri -->
                                    <label class="flex items-center space-x-4">
                                        <input type="radio" name="payment_method" value="mandiri" class="form-radio text-custom-300 focus:ring-custom-300" @if(old('payment_method') == 'mandiri') checked @endif>
                                        <img src="{{ asset('images/mandiri.png') }}" alt="Mandiri" class="w-10 h-10 rounded-lg border shadow-md">
                                        <span class="font-semibold text-gray-700">Mandiri</span>
                                    </label>
                                    <!-- Bank BSI -->
                                    <label class="flex items-center space-x-4">
                                        <input type="radio" name="payment_method" value="bsi" class="form-radio text-custom-300 focus:ring-custom-300" @if(old('payment_method') == 'bsi') checked @endif>
                                        <img src="{{ asset('images/bsi.png') }}" alt="BSI" class="w-10 h-10 rounded-lg border shadow-md">
                                        <span class="font-semibold text-gray-700">BSI</span>
                                    </label>
                                </div>
                                @error('payment_method')
                                <div class="mt-4">
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>   
            
                        <!-- Tombol Donasi -->
                        <button type="submit" class="w-full mt-2 bg-gradient-to-r from-custom-50 to-custom-75 text-white font-bold py-3 px-4 rounded-xl hover:from-custom-50 hover:to-custom-100">
                            Donasi Sekarang
                        </button>
                    </form>
                </div>
            </div>
            <!-- Form Donasi -->
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.nominal-btn');
    const jumlahInput = document.getElementById('jumlah');
    const jumlahAsliInput = document.getElementById('jumlah_asli');

    function formatRupiah(angka) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 })
            .format(angka).replace('Rp', '').trim();
    }

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const nominal = button.getAttribute('data-value');
            jumlahInput.value = formatRupiah(nominal);
            jumlahAsliInput.value = nominal; // Simpan nilai asli ke input hidden

            // Ganti style button aktif
            buttons.forEach(btn => btn.classList.remove('bg-custom-75', 'text-white', 'font-semibold', 'border-custom-100'));
            button.classList.add('bg-custom-75', 'text-white', 'font-semibold', 'border-custom-100');
        });
    });

    jumlahInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/[^0-9]/g, ''); // Hanya angka
        jumlahInput.value = formatRupiah(value); // Format ke rupiah
        jumlahAsliInput.value = value; // Simpan nilai asli ke input hidden
    });
});

</script>
@stop
