@extends('layout.admin')

@section('content')
    <div class="m-10">
        {{-- HEADINGS --}}
        <div class="mb-4 flex justify-between">
            <span class="text-5xl font-bold">Payments</span>
        </div>

        {{-- CARD INFO  --}}
        <div class="grid md:grid-cols-3 gap-4 mb-4">
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <div class="flex justify-between">
                    <h3 class="text-md font-semibold text-custom-200">Pendapatan Donasi</h3>
                </div>
                <div class="flex gap-2">
                    <p class="text-3xl font-bold text-white mt-2">
                        {{ 'Rp ' . number_format($jumlahDonasi, 0, ',', '.') }}
                    </p>
                </div>
            </div>
    
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <div class="flex justify-between">
                    <h3 class="text-md font-semibold text-custom-200">Donasi rata-rata per hari</h3>
                </div>
                <p class="text-3xl font-bold text-white mt-2">
                    Rp. {{ number_format($donasiRataHari, 0, ',', '.') }}
                </p>
            </div>

            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <div class="flex justify-between">
                    <h3 class="text-md font-semibold text-custom-200">Jumlah Transaksi</h3>
                </div>
                <p class="text-3xl font-bold text-white mt-2">
                    {{$jumlahTransaksi}}
                </p>
            </div>
        </div>

        {{-- SEARCH --}}
        <div class="flex justify-between my-2 gap-4">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <form method="GET" action="{{ route('admin.payments.index') }}" class="mb-2 md:w-2/5 self-center rounded-xl">
                <div class="relative flex gap-2">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="default-search" class="block w-full p-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search by donor name..." value="{{ $search ?? '' }}" />
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
        </div>

        <hr class="my-4"/>

        {{-- FILTER --}}
        <div class="flex my-4 space-x-4 w-full items-center">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:w-2/3">
                <!-- Semua -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-pink-100 text-pink-800">
                    <input 
                        id="radio-semua" 
                        type="radio" 
                        value="" 
                        name="status" 
                        class="w-4 h-4 text-pink-800 bg-pink-100 border-gray-300 focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-pink-900 dark:border-gray-600" 
                        {{ request('status') == '' ? 'checked' : '' }}
                        onclick="filterByStatus('')">
                    <label for="radio-semua" class="ml-2 text-sm font-medium text-pink-800 dark:text-pink-300">Semua</label>
                </div>
                <!-- Confirmed -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-green-100 text-green-800">
                    <input 
                        id="radio-confirmed" 
                        type="radio" 
                        value="confirmed" 
                        name="status" 
                        class="w-4 h-4 text-green-800 bg-green-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-green-900 dark:border-gray-600"
                        {{ request('status') == 'confirmed' ? 'checked' : '' }}
                        onclick="filterByStatus('confirmed')">
                    <label for="radio-confirmed" class="ml-2 text-sm font-medium text-green-800 dark:text-green-300">Confirmed</label>
                </div>
                <!-- Pending -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-yellow-100 text-yellow-800">
                    <input 
                        id="radio-pending" 
                        type="radio" 
                        value="pending" 
                        name="status" 
                        class="w-4 h-4 text-yellow-800 bg-yellow-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-yellow-900 dark:border-gray-600"
                        {{ request('status') == 'waiting_confirmation' ? 'checked' : '' }}
                        onclick="filterByStatus('waiting_confirmation')">
                    <label for="radio-pending" class="ml-2 text-sm font-medium text-yellow-800 dark:text-yellow-300">Pending</label>
                </div>
            </div>
        </div>
        

        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        
        {{-- TABEL ACCEPTING PAYMENT --}}
        <div class="relative overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-custom-500 uppercase bg-custom-300">
                    <tr>
                        <th class="px-4 py-4">User</th>
                        <th class="px-4 py-4">Jumlah</th>
                        <th class="px-4 py-4">Program</th>
                        <th class="px-4 py-4">Status</th>
                        <th class="px-2 py-4">Bukti Bayar</th>
                        <th class="px-4 py-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($payments as $payment)
                        <tr class="bg-custom-400 border-b border-custom-300 last:border-b-0">
                            <td class="px-4 py-2">{{ $payment->user->name ?? 'Anonim' }}</td>
                            <td class="px-4 py-2">Rp. {{ number_format($payment->jumlah, 2) }}</td>
                            <td class="px-4 py-2">{{ $payment->target->namaprogram ?? 'N/A' }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 text-xs rounded-full 
                                {{ $payment->status === 'confirmed' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : '' }}
                                {{ $payment->status === 'pending' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300' : '' }}
                                {{ $payment->status === 'rejected' ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' : '' }}">
                                {{ ucfirst($payment->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                @if($payment->gambar)
                                    <img 
                                        src="{{ asset('storage/' . $payment->gambar) }}" 
                                        alt="Bukti Bayar" 
                                        class="w-16 h-16 object-cover rounded cursor-pointer"
                                        onclick="openModal(this.src)"
                                    >
                                @else
                                    <span class="text-gray-500">No Image</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 flex gap-2">
                                @if ($payment->status === 'waiting_confirmation')
                                    <form action="{{ route('admin.payments.confirm', $payment->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600">Confirm</button>
                                    </form>
                                    <form action="{{ route('admin.payments.reject', $payment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to reject and delete this payment?');">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">Reject</button>
                                    </form>
                                @else
                                    <span class="text-gray-500">No Actions</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-4 text-center text-gray-500 border border-custom-300 bg-custom-400 dark:bg-custom-900">No payments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
    </div>

    <!-- Modal untuk menampilkan gambar -->
    <div id="imageModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
        <div class="relative">
            <img id="modalImage" class="max-w-full max-h-screen object-contain rounded-lg" alt="Preview Gambar">
            <button id="closeModal" class="absolute top-2 right-2 text-white bg-red-500 rounded-full w-8 h-8 flex items-center justify-center focus:outline-none hover:bg-red-600">
                &times;
            </button>
        </div>
    </div>


    <script>
        const imageModal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.getElementById('closeModal');
    
        function openModal(imageSrc) {
            modalImage.src = imageSrc;
            imageModal.classList.remove('hidden');
        }
    
        closeModal.addEventListener('click', () => {
            imageModal.classList.add('hidden');
        });
    
        // Close modal when clicking outside the image
        imageModal.addEventListener('click', (e) => {
            if (e.target === imageModal) {
                imageModal.classList.add('hidden');
            }
        });
    </script>    
@stop

<script>
    function filterByStatus(status) {
        const url = new URL(window.location.href);
        url.searchParams.set('status', status); // Set parameter status di URL
        window.location.href = url.toString(); // Redirect ke URL baru
    }
</script>
