@extends('layout.detailApp')

@section('content')
<div class="m-10 pt-22">
    <div class="mb-10">
        <div class="flex justify-start items-center mb-4">
            <a href="{{ route('landing') }}" onclick="window.history.back();" class="text-lg font-semibold flex items-center rounded-xl text-gray-700">
                <ion-icon name="chevron-back-outline" class="mr-1 text-xl"></ion-icon>
                Back to home
            </a>            
        </div>
    </div>

    <h1 class="text-5xl font-bold mb-6">Profile</h1>
    <div class="flex justify-center pb-4">
        <div class="grid space-y-4 w-full">
            <div class="rounded-xl border-custom-200 w-full">
                <div class="flex justify-between bg-custom-50 rounded-lg p-4">
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

                    <div class="w-20 h-20 self-center">
                        @if ($user->gambar)
                            <img
                                src="{{ asset('storage/' . $user->gambar) }}"
                                alt="Profile Picture"
                                class="h-full w-full rounded-full object-cover"
                            />
                        @else
                            <div 
                                class="h-full w-full rounded-full bg-gray-400 flex items-center justify-center text-white text-3xl font-bold">
                                {{ strtoupper(collect(explode(' ', $user->name))->map(fn($word) => $word[0])->join('')) }}
                            </div>
                        @endif
                    </div>
                </div>         
            </div>

            <div class="bg-custom-50 rounded-md p-4 border border-custom-50">
                <span class="text-custom-500 text-4xl font-bold mb-6">Akun</span>
                <div class="mt-6">
                    <!-- Edit Profil -->
                    <a href="{{ route('profile.edit') }}">
                        <div class="flex justify-between items-center rounded-lg bg-custom-75 hover:bg-custom-100 p-4">
                            <div href="" class="flex gap-2 items-center">
                                <ion-icon name="pencil-outline" class="bg-custom-300 text-white p-2 size-5 rounded"></ion-icon>
                                <span class="text-white text-lg">Edit Profil</span>
                            </div>
                            <ion-icon name="chevron-forward-outline" class="text-white size-8"></ion-icon>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Card Keamanan dan Privasi -->
            <div class="bg-custom-50 rounded-md p-4 border border-custom-50">
                <span class="text-custom-500 text-4xl font-bold mb-6">Pembayaran</span>
                <div class="mt-6">
                    <!-- Histori Transaksi -->
                    <div class="bg-custom-75 p-4 rounded-lg" onclick="toggleDropdown()">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <ion-icon name="receipt" class="bg-custom-200 text-white p-2 size-5 rounded"></ion-icon>
                                <span class="text-white text-lg">Riwayat transaksi</span>
                            </div>
                            <ion-icon name="chevron-down-outline" class="text-white size-8 cursor-pointer"></ion-icon>
                        </div>
                        <div id="dropdown-histori" class="hidden mt-4">
                            @forelse ($donasi as $donasiItem)
                                <div class="p-2 mt-2 border-b last:border-b-0">
                                    <span class="text-white text-xs">{{ $donasiItem->waktu_donasi->format('d M Y, H:i') }}</span>
                                    <div class="text-white text-2xl font-bold">
                                        Rp {{ number_format($donasiItem->jumlah, 2, ',', '.') }}
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
