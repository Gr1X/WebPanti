@extends('layout.app')

@section('content')
<div class="">
    <div class="bg-gray-100 min-h-screen px-14 gap-4">
        <div class="w-full lg:pt-44 pb-6">
            <div class="bg-gray-50 dark:bg-custom-50 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:pt-16 md:p-12">
                <h1 class="text-gray-900 dark:text-white text-4xl md:text-5xl font-semibold mb-2">Donation</h1>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6"></p>
            </div>
        </div>

        <div class="pb-8">
            <div class="mb-8 flex justify-between">
                <div class="">
                    <div class="grid">
                        <span class="text-3xl font-bold text-custom-50">Mari Bantu Mereka yang Membutuhkan</span>
                        <span class="text-lg text-custom-300 font-semibold">Uluran tangan kecil berarti besar bagi mereka</span>
                    </div>
                    {{-- <div class="">
                        <span class="text-lg">Menampilkan <b>12</b> campaign dari <b>142</b> campaign</span>
                    </div> --}}
                </div>
            </div>
            
            <div class="grid grid-cols-3 gap-8">
            @foreach ($targets as $target)
                <a href="{{ route('donateDetails', $target->id) }}" class="bg-white rounded-md shadow-lg overflow-hidden max-w-md">
                    <!-- Gambar Program -->
                    <img class="w-full h-48 object-cover" 
                        src="{{ $target->gambar ? asset('storage/' . $target->gambar) : 'https://via.placeholder.com/300' }}" 
                        alt="{{ $target->namaprogram }}">

                    <!-- Informasi Program -->
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2">{{ $target->namaprogram }}</h2>
                        <p class="text-sm text-gray-700 mb-2">{{ Str::limit($target->deskripsi, 100) }}</p>
                        <hr class="my-4" />

                        <!-- Progress Bar -->
                        @php
                            $terkumpul = $target->donasi_sum_jumlah ?? 0; // Total donasi yang terkumpul
                            $persentase = $target->jumlah_target > 0 ? round(($terkumpul / $target->jumlah_target) * 100, 2) : 0; // Hitung progress
                        @endphp
                        <div class="w-full bg-gray-200 rounded-full dark:bg-custom-400 my-1">
                            <div class="bg-custom-300 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: {{ $persentase }}%">
                                {{ $persentase }}%
                            </div>
                        </div>

                        <!-- Info Terkumpul dan Tanggal Selesai -->
                        <div class="flex flex-wrap justify-between mt-1">
                            <div class="grid">
                                <span class="text-sm">Terkumpul</span>
                                <span class="text-lg font-bold">Rp. {{ number_format($terkumpul, 0, ',', '.') }}</span>
                            </div>
                            <div class="grid items-end">
                                @php
                                    $tglSelesai = $target->tgl_selesai ? \Carbon\Carbon::parse($target->tgl_selesai)->format('d M Y') : 'Tidak Ditentukan';
                                @endphp
                                <span class="text-sm">Tanggal Selesai</span>
                                <span class="text-center text-lg font-bold">{{ $tglSelesai }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>
    </div>
</div>
@stop
