@extends('layout.app')

@section('content')
<div class="pt-56 pb-20 w-full">
    <div class="flex justify-between px-8">
        <!-- Bagian Kiri -->
        <div>
            <!-- Gambar Program -->
            <img src="{{ asset('storage/' . $target->gambar) }}" alt="{{ $target->namaprogram }}" class="h-[25rem] w-[48rem] object-cover rounded-lg">
        </div>

        <!-- Bagian Kanan -->
        <div>
            <!-- Judul dan Deskripsi -->
            <div>
                <h2 class="text-2xl font-bold uppercase">{{ $target->namaprogram }}</h2>
                <p class="text-sm text-gray-700">{{ $target->deskripsi }}</p>
            </div>

            <hr class="my-3 mb-6" />

            <!-- Detail Target Donasi -->
            <div class="flex flex-wrap justify-between mt-1 my-6">
                <div class="grid w-full">
                    <div class="flex justify-between">
                        <span class="text-2xl font-bold">Rp. {{ number_format($terkumpul, 0, ',', '.') }}</span>
                        <span class="flex items-center gap-1 text-sm self-end">
                            <ion-icon name="people-outline" class="size-4"></ion-icon>{{ $target->donasi->count() }} Donatur
                        </span>
                    </div>

                    <!-- Progress Bar -->
                    @php
                        $percentage = ($target->jumlah_target > 0) ? ($terkumpul / $target->jumlah_target) * 100 : 0;
                    @endphp
                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                        <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" 
                            style="width: {{ $percentage }}%">
                            {{ number_format($percentage, 2) }}%
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <div class="grid items-end">
                            <span class="text-xs">{{ number_format($percentage, 2) }}% terkumpul dari Rp {{ number_format($target->jumlah_target, 0, ',', '.') }}</span>
                        </div>
                        <div class="grid items-end">
                            <span class="text-xs flex items-center gap-1">
                                <ion-icon name="calendar-outline"></ion-icon>
                                {{ Carbon\Carbon::parse($target->tgl_selesai)->format('d M Y') }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Tombol Donasi -->
                @if ($donasiTersedia)
                    <a href="{{ route('donation.payment', $target->id) }}" 
                        class="bg-gradient-to-r from-cyan-500 to-blue-500 p-1.5 my-4 rounded text-center w-full uppercase font-bold hover:bg-gradient-to-r from-cyan-500 to-blue-500 text-white">
                        Donasi Sekarang
                    </a>
                @else
                    @php
                        $today = \Carbon\Carbon::now();
                        $tglMulai = \Carbon\Carbon::parse($target->tgl_mulai);
                        $tglSelesai = \Carbon\Carbon::parse($target->tgl_selesai);
                    @endphp

                    <button disabled
                        class="bg-gray-400 p-1.5 my-4 rounded text-center w-full uppercase font-bold text-white cursor-not-allowed">
                        @if ($today->lt($tglMulai))
                            Donasi Belum Dibuka (Mulai: {{ $tglMulai->format('d M Y') }})
                        @elseif ($today->gt($tglSelesai))
                            Donasi Ditutup (Berakhir: {{ $tglSelesai->format('d M Y') }})
                        @endif
                    </button>
                @endif
            </div>

            <hr class="my-3 mb-6" />
        </div>
    </div>
</div>
@stop
