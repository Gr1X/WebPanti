@extends('layout.detailApp')

@section('content')
<div class="px-10 bg-custom-400 py-8">
    <div class="">
        <div class="flex justify-start items-center mb-4">
            <a href="{{ url()->previous() }}" onclick="window.history.back();" class="text-lg font-semibold flex items-center py-3 px-2 rounded-xl text-gray-700 bg-gray-200 shadow border-gray-100">
                <ion-icon name="chevron-back-outline" class="mr-1 text-xl"></ion-icon>
                Back to home
            </a>            
        </div>
    </div>

    <div class="flex justify-center pb-4">
    
        <div class="grid space-y-4 w-full">
            <div class="border border-dashed border-2 p-2 rounded-xl border-custom-200 w-3/5">
                <div class="flex justify-between bg-custom-75 rounded-xl p-4">
                    <div class="flex gap-4">
                        <div class="flex items-center">
                            <ion-icon name="id-card-outline" class="text-custom-500 p-2 size-14 rounded-xl bg-custom-200"></ion-icon>
                        </div>

                        <div class="grid p-2 self-center">
                            <div>
                                <h1 class="text-3xl text-custom-500 font-bold">
                                    {{ $user->name }} 
                                    @if($isVolunteer)
                                        <span class="text-green-400 text-xl">(Volunteered)</span>
                                    @endif
                                </h1>
                            </div>
                            <div>
                                <h1 class="text-custom-500 italic">{{ $user->email }}</h1>
                            </div>
                            <div>
                                <h1 class="text-custom-500 italic">{{ $user->no_telp }}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="w-20 h-20 self-center">
                            @if ($user->gambar)
                                <img
                                    src="{{ asset('storage/' . $user->gambar) }}"
                                    alt="Profile Picture"
                                    class="h-full w-full rounded-full object-cover"
                                />
                            @else
                                <div 
                                    class="h-full w-full rounded-full bg-gray-500 flex items-center justify-center text-white text-3xl font-bold"
                                    style="font-family: Arial, sans-serif;"
                                >
                                    {{ strtoupper(collect(explode(' ', $user->name))->map(fn($word) => $word[0])->join('')) }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>            
            </div>
    
            <div class="bg-custom-400 rounded-md p-4 border border-custom-50">
                <span class="text-custom-50 text-3xl font-bold mb-6">Keamanan dan Privasi</span>
                <div class="mt-6">
                    <!-- Edit Profil -->
                    <div class="flex justify-between items-center bg-custom-75 hover:bg-custom-100 hover:rounded p-2">
                        <a href="{{ route('profile.edit') }}" class="flex gap-2 items-center">
                            <ion-icon name="pencil-outline" class="bg-custom-100 text-white p-2 size-5 rounded"></ion-icon>
                            <span class="text-white text-lg">Edit Profil</span>
                        </a>
                        <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                    </div>
    
                    <!-- Ubah Kata Sandi -->
                    <!-- <div class="flex justify-between items-center hover:bg-slate-900 hover:rounded p-2">
                        <a href="{{ route('password.edit') }}" class="flex gap-2 items-center">
                            <ion-icon name="lock-open-outline" class="bg-slate-400 p-2 size-5 rounded"></ion-icon>
                            <span class="text-white text-lg">Ubah Kata Sandi</span>
                        </a>
                        <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                    </div> -->
                </div>
            </div>
    
             <!-- Card Keamanan dan Privasi -->
             <div class="bg-custom-400 rounded-md p-4 border border-custom-50">
                <span class="text-custom-50 text-3xl font-bold mb-6">Pembayaran</span>
                <div class="mt-6">
                    <!-- Histori Transaksi -->
                    <div class="bg-custom-75 p-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <ion-icon name="receipt" class="bg-custom-100 text-white p-2 size-5 rounded"></ion-icon>
                                <span class="text-white text-lg">Riwayat transaksi</span>
                            </div>
                            <ion-icon name="chevron-down-outline" class="text-white size-8 cursor-pointer" onclick="toggleDropdown()"></ion-icon>
                        </div>
                        <div id="dropdown-histori" class="hidden mt-4">
                            @forelse ($donasi as $donasiItem)
                            <div class="p-3 bg-slate-900 rounded mt-2">
                                <span class="text-white text-sm">{{ $donasiItem->waktu_donasi->format('d M Y, H:i') }}</span>
                                <div class="text-white">
                                    Jumlah: Rp {{ number_format($donasiItem->jumlah, 2, ',', '.') }}
                                </div>
                                <div class="text-gray-400 text-sm italic">{{ $donasiItem->notes }}</div>
                            </div>
                            @empty
                            <div class="text-custom-50 text-sm mt-2">
                                Belum ada transaksi.
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown-histori');
        dropdown.classList.toggle('hidden');
    }
</script>
@stop
