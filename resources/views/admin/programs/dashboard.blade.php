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
                        <a href="{{ route("admin.payments.index") }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                    </div>
                </div>
            </div>

            <div class="flex gap-2">
                <p class="text-3xl font-bold text-white mt-2">
                    Rp. {{ number_format($totalDonasiBulanan, 0, ',', '.') }}
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
                {{$totalUser}}
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
                        <a href="{{ route("admin.programs.index")}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">View Details</a>
                    </div>
                </div>
            </div>
            <p class="text-3xl font-bold text-white mt-2">
                {{$programCount}}
            </p>
        </div>
    </div>
    
    {{-- CHART & HISTORY  --}}
    <div class="flex gap-4 mb-2">
        {{-- CHART --}}
        <div class="bg-gray-800 p-6 rounded-2xl shadow w-3/5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-white">Total Donasi</p>
                    <h1 class="text-2xl font-bold text-white">Rp. {{ number_format($totalDonasi, 0, ',', '.') }}</h1>
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
            <div class="">
                <div class="flex justify-between w-full">
                    <div class="">
                        <h1 class="text-lg font-bold text-white self-center">Transaksi Terbaru</h1>
                    </div>
                    <a
                        href="{{ route("admin.payments.index") }}"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-2xl text-blue-400 hover:text-blue-500  hover:bg-gray-700 focus:ring-gray-700 border-gray-700 px-3 py-2">
                        See All
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            @forelse ($historyDonasi as $donasiItem)
            <div class="m-2 pb-2 border-b last:border-b-0">
                <span class="text-white text-xs">{{ $donasiItem->waktu_donasi->format('d M Y, H:i') }}</span>
                <div class="text-white text-2xl font-bold">
                    Rp {{ number_format($donasiItem->jumlah, 2, ',', '.') }}
                </div>
                <div class="text-gray-400 text-sm italic truncate">{{ $donasiItem->notes }}</div>
            </div>
            @empty
            <div class="text-custom-50 text-sm mt-2">
                Belum ada transaksi.
            </div>
            @endforelse
            </div>
        </div>
    </div>

    {{-- CHART DONUT --}}
    <div class="relative mx-10">
        <div class="bg-gray-800 rounded-2xl shadow p-6 h-[500px]">
            <!-- Header -->
            <div class="mb-4 flex justify-between">
                <span id="tableTitle" class="text-white text-4xl font-semibold">Program</span>
                <div class="flex space-x-2">
                    <button onclick="previousTable()" class="bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full shadow-md">
                        <ion-icon name="chevron-back-outline" class="w-6 h-6 flex items-center"></ion-icon>
                    </button>
                    <button onclick="nextTable()" class="bg-gray-700 hover:bg-gray-600 text-white p-2 rounded-full shadow-md">
                        <ion-icon name="chevron-forward-outline" class="w-6 h-6 flex items-center"></ion-icon>
                    </button>
                </div>
            </div>
    
            <!-- Tabel yang Berganti -->
            <div id="tableContainer" class="relative overflow-x-auto overflow-y-auto max-h-[350px] rounded-xl">
                <!-- Table 1: Program -->
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 program-table">
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
                            <td class="px-6 py-4">
                                @if($program->gambar)
                                <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->namaprogram }}" class="w-16 h-16 object-cover rounded">
                                @else
                                <span class="text-gray-500">No Image</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 max-w-2xs truncate">{{ $program->namaprogram }}</td>
                            <td class="px-6 py-4">
                                @if($program->status === 'complete')
                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Complete</span>
                                @elseif($program->status === 'ongoing')
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">On Going</span>
                                @else
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">Closed</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" 
                                        style="width: {{ $program->jumlah_target > 0 ? round(($program->donasi_sum_jumlah / $program->jumlah_target) * 100, 2) : 0 }}%;"></div>
                                </div>
                                <div class="text-xs mt-2">{{ number_format($program->donasi_sum_jumlah ?? 0, 2) }} / {{ number_format($program->jumlah_target, 2) }}</div>
                            </td>
                            <td class="px-6 py-4 max-w-2xs truncate">
                                {{ \Carbon\Carbon::parse($program->tgl_mulai)->format('d F Y') }} - 
                                {{ $program->tgl_selesai ? \Carbon\Carbon::parse($program->tgl_selesai)->format('d F Y') : 'Tidak ditentukan' }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="py-2 px-4 text-center border border-gray-300">Belum ada program.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
    
                <!-- Table 2: User -->
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 hidden user-table">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-5">Foto</th>
                            <th class="px-6 py-5">Nama</th>
                            <th class="px-6 py-5">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="bg-white border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                <img src="{{ asset('storage/' . $user->gambar) }}" alt="User Photo" class="w-16 h-16 object-cover rounded">
                            </td>
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    
                <!-- Table 3: Volunteer -->
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 hidden volunteer-table">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-5">Nama</th>
                            <th class="px-6 py-5">Gender</th>
                            <th class="px-6 py-5">Bidang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($volunteers as $volunteer)
                        <tr class="bg-white border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $volunteer->nama }}</td>
                            <td class="px-6 py-4">{{ $volunteer->gender }}</td>
                            <td class="px-6 py-4">{{ ucfirst($volunteer->bidang) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    
                <!-- Table 4: Payment -->
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 hidden payment-table">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-5">Program ID</th>
                            <th class="px-6 py-5">Jumlah</th>
                            <th class="px-6 py-5">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                        <tr class="bg-white border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $payment->program_id }}</td>
                            <td class="px-6 py-4">Rp. {{ number_format($payment->jumlah, 2) }}</td>
                            <td class="px-6 py-4">
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">
                                    {{ ucfirst($payment->status) }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data untuk chart
    const data = @json($donasiPerBulan);

    // Format data untuk Chart.js
    const labels = data.map(item => `${item.tahun} - ${item.bulan}`);
    const rataRata = data.map(item => item.rata_rata);

    // Buat chart menggunakan Chart.js
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line', // Tipe chart
        data: {
            labels: labels,
            datasets: [{
                label: 'Rata-rata Donasi per Bulan',
                data: rataRata,
                borderColor: '#335441', // Hijau tua
                backgroundColor: 'rgba(102, 140, 100, 0.5)', // Hijau muda transparan
                pointBackgroundColor: '#DEAE48', // Oren untuk titik
                pointBorderColor: '#DFAE48', // Kuning untuk garis border
                pointHoverBackgroundColor: '#FFE68B', // Kuning part 2 (hover)
                pointHoverBorderColor: '#FFEDA9', // Kuning part 3 (hover border)
                borderWidth: 4,
                pointRadius: 6,
                pointHoverRadius: 8,
                tension: 0.4 // Membuat garis lebih smooth
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        color: '#FFFDF1', // Putih lebih gelap
                        font: {
                            size: 14,
                            family: 'Poppins, sans-serif', // Font Poppins
                            weight: '600'
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)', // Grid garis halus
                    },
                    ticks: {
                        color: '#FFFFFF', // Putih
                        font: {
                            size: 12,
                            family: 'Poppins, sans-serif', // Font Poppins
                            weight: '400'
                        }
                    }
                },
                y: {
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)', // Grid garis halus
                    },
                    ticks: {
                        color: '#FFFFFF', // Putih
                        font: {
                            size: 12,
                            family: 'Poppins, sans-serif', // Font Poppins
                            weight: '400'
                        },
                        beginAtZero: true
                    }
                }
            }
        }
    });

    const tables = document.querySelectorAll('#tableContainer table');
    const tableTitles = ['Program', 'User', 'Volunteer', 'Payment'];
    let currentTableIndex = 0;

    function updateTable() {
        tables.forEach((table, index) => {
            table.classList.toggle('hidden', index !== currentTableIndex);
        });

        const tableTitle = document.getElementById('tableTitle');
        tableTitle.textContent = tableTitles[currentTableIndex];
    }

    function nextTable() {
        currentTableIndex = (currentTableIndex + 1) % tables.length;
        updateTable();
    }

    function previousTable() {
        currentTableIndex = (currentTableIndex - 1 + tables.length) % tables.length;
        updateTable();
    }

    // Initialize first table
    updateTable();
</script>

            
@stop