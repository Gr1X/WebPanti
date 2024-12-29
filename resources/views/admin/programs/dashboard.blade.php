@extends('layout.admin')

@section('content')


<div class="m-10 space-y-4">
    {{-- HEADING --}}
    <div class="text-4xl font-bold mb-2">
        <span>Dashboard</span>
    </div>
    
    {{-- CARD INFO 1 --}}
    <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="bg-gray-800 p-4 rounded-2xl shadow">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-gray-400">Pendapatan Donasi</h3>
                <ion-icon name="ellipsis-horizontal" class="text-white size-5 self-center cursor-pointer" 
                data-dropdown-toggle="donasiDropdown" 
                data-dropdown-placement="bottom-start">
                </ion-icon>

                <div id="donasiDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                    </div>
                </div>
            </div>
            <div class="flex gap-2">
                <p class="text-3xl font-bold text-white mt-2">
                    Rp. 20.000.000
                </p>
                <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 self-center">+12,5%</span>
            </div>
        </div>

        <div class="bg-gray-800 p-4 rounded-2xl shadow">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-gray-400">User Account</h3>
                <ion-icon name="ellipsis-horizontal" class="text-white size-5 self-center cursor-pointer" 
                data-dropdown-toggle="accountDropdown" 
                data-dropdown-placement="bottom-start">
                </ion-icon>

                <div id="accountDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                    </div>
                </div>
            </div>
            <p class="text-3xl font-bold text-white mt-2">
                3
            </p>
        </div>

        <div class="bg-gray-800 p-4 rounded-2xl shadow">
            <div class="flex justify-between">
                <h3 class="text-sm font-medium text-gray-400">Total Program</h3>
                <ion-icon name="ellipsis-horizontal" class="text-white size-5 self-center cursor-pointer" 
                data-dropdown-toggle="programDropdown" 
                data-dropdown-placement="bottom-start">
                </ion-icon>

                <div id="programDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                    </div>
                </div>
            </div>
            <p class="text-3xl font-bold text-white mt-2">
                14
            </p>
        </div>
    </div>
    
    {{-- CHART & HISTORY  --}}
    <div class="flex gap-4 mb-4">
        {{-- CHART --}}
        <div class="bg-gray-800 p-6 rounded-2xl shadow w-3/5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-white">Total Donasi</p>
                    <h1 class="text-2xl font-bold text-white">Rp. 2.532.103</h1>
                </div>
            </div>
    
            <canvas id="salesChart" class="mt-4"></canvas>
    
            <div class="flex justify-between text-sm text-white mt-4">
                <span>Dalam 1 Tahun Terakhir</span>
                <a href="#" class="text-custom-200 hover:underline"></a>
            </div>
        </div>
        
        {{-- HISTORY TRANSAKSI TERAKHIR --}}
        <div class="bg-gray-800 p-6 rounded-2xl shadow w-2/5">
            <div class="flex items-center justify-between">
                <h1 class="text-lg font-bold text-white">Transaksi Terbaru</h1>
            </div>
            
            <div class="mt-4">
                <div class="flex mb-2">
                    <div class="flex justify-between w-full items-center gap-4">
                        <img src="https://via.placeholder.com/50" alt="Program" class="w-10 h-10 rounded border border-custom-75">
                        <div class="grid">
                            <span class="flex text-lg font-bold text-white justify-end">Rp. 1.000.000</span>
                            <span class="text-sm text-white">08 Desember 2024, 08.00</span>
                        </div>
                    </div>
                </div>
                <hr class="my-2"/>

                <div class="flex mb-2">
                    <div class="flex justify-between w-full items-center gap-4">
                        <img src="https://via.placeholder.com/50" alt="Program" class="w-10 h-10 rounded border border-custom-75">
                        <div class="grid">
                            <span class="flex text-lg font-bold text-white justify-end">Rp. 1.000.000</span>
                            <span class="text-sm text-white">08 Desember 2024, 08.00</span>
                        </div>
                    </div>
                </div>
                <hr class="my-2"/>

                <div class="flex mb-2">
                    <div class="flex justify-between w-full items-center gap-4">
                        <img src="https://via.placeholder.com/50" alt="Program" class="w-10 h-10 rounded border border-custom-75">
                        <div class="grid">
                            <span class="flex text-lg font-bold text-white justify-end">Rp. 1.000.000</span>
                            <span class="text-sm text-white">08 Desember 2024, 08.00</span>
                        </div>
                    </div>
                </div>
                <hr class="my-2"/>
            </div>
        </div>
    </div>

    {{-- CHART DONUT --}}
    <div class="grid grid-cols-3 gap-6">
        <!-- Card Pertama -->
        <div class="col-span-1 bg-gray-800 rounded-2xl shadow p-6">
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-2xl bg-gray-700 flex items-center justify-center me-3">
                        <ion-icon name="people" class="w-7 h-7 text-gray-400"></ion-icon>
                    </div>
                    <div>
                        <h5 class="leading-none text-2xl font-bold text-white pb-1">Rp. 340.000.000</h5>
                        <p class="text-sm font-normal text-gray-400">Donasi per minggu</p>
                    </div>
                </div>
                <div>
                    <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                        </svg>
                        42.5%
                    </span>
                </div>
            </div>
    
            <div class="grid grid-cols-2 mb-4">
                <dl class="flex items-center">
                    <dt class="text-gray-400 text-sm font-normal me-1">Jumlah Akun: </dt>
                    <dd class="text-sm text-white font-semibold">42</dd>
                </dl>
            </div>
    
            <canvas id="column-chart" class="w-full h-40"></canvas>
    
            <div class="flex justify-between text-white items-center pt-5 border-t border-gray-200 dark:border-gray-700">
                <span>Last 7 Days</span>
                <a
                    href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                    See All
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
            </div>
        </div>
    
        <!-- Table -->
        <div class="col-span-2 bg-gray-800 rounded-2xl shadow p-6 h-[420px]">
            <div class="mb-4 flex justify-between">
                <span class="text-white text-2xl font-semibold">Program</span>
                <a
                    href="#"
                    class="uppercase text-sm font-semibold inline-flex items-center rounded-2xl text-blue-400 hover:text-blue-500  hover:bg-gray-700 focus:ring-gray-700 border-gray-700 px-3 py-2">
                    See All
                    <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </a>
            </div>
            <!-- Membuat tabel dapat di-scroll -->
            <div class="relative overflow-x-auto overflow-y-auto max-h-[310px] rounded-2xl">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-5">Gambar</th>
                            <th class="px-6 py-5">Nama Program</th>
                            <th class="px-6 py-5">Status</th>
                            <th class="px-6 py-5">Progress</th>
                            <th class="px-6 py-5">Periode</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($programs as $program)
                            <tr class="bg-white border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700">
                                <!-- Display Image -->
                                <td class="px-6 py-4">
                                    @if($program->gambar)
                                        <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->namaprogram }}" class="w-16 h-16 object-cover rounded">
                                    @else
                                        <span class="text-gray-500">No Image</span>
                                    @endif
                                </td>
        
                                <!-- Nama Program -->
                                <td class="px-6 py-4 max-w-2xs truncate">{{ $program->namaprogram }}</td>
        
                                <!-- Status -->
                                <td class="px-6 py-4">
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Complete</span>
                                </td>
        
                                <!-- Progress -->
                                <td class="px-6 py-4">
                                    <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" 
                                            style="width: {{ $program->jumlah_target > 0 ? round(($program->donasi_sum_jumlah / $program->jumlah_target) * 100, 2) : 0 }}%;">
                                        </div>
                                    </div>
                                    <div class="text-xs mt-2">
                                        {{ number_format($program->donasi_sum_jumlah ?? 0, 2) }} / {{ number_format($program->jumlah_target, 2) }}
                                    </div>
                                </td>
        
                                <!-- Periode -->
                                <td class="px-6 py-4 max-w-2xs truncate">
                                    {{ \Carbon\Carbon::parse($program->tgl_mulai)->format('d F Y') }} - 
                                    {{ $program->tgl_selesai ? \Carbon\Carbon::parse($program->tgl_selesai)->format('d F Y') : 'Tidak ditentukan' }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-2 px-4 text-center border border-gray-300">
                                    Belum ada program.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        

    </div>    
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('column-chart').getContext('2d');
    const columnChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], // X-axis labels
            datasets: [
                {
                    label: 'Organic',
                    data: [231, 122, 63, 421, 122, 323, 111],
                    backgroundColor: 'rgba(26, 86, 219, 0.7)', // Bar color
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top', // Position of the legend
                },
                tooltip: {
                    enabled: true,
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                    title: {
                        display: true,
                        text: 'Days of the Week',
                    },
                },
                y: {
                    grid: {
                        display: true,
                        drawBorder: false,
                    },
                    title: {
                        display: true,
                        text: 'Donations',
                    },
                },
            },
        },
    });
</script>

            
@stop