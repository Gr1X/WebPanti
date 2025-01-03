@extends('layout.admin')

@section('content')
    <div class="m-10">

        {{-- HEADING --}}
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-5xl font-bold  ">Programs</h1>
        </div>
        
        {{-- CARD INFO  --}}
        <div class="grid grid-cols-3 gap-4 my-4">
            <div class="bg-custom-50 p-4 rounded-xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Total Program</h3>
                <div class="flex gap-2">
                    <p class="text-3xl font-bold text-white mt-2">
                        {{ $programCount }}
                    </p>
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 self-center">1<ion-icon name="arrow-up-outline"></ion-icon></span>
                </div>
            </div>
    
            <div class="bg-custom-50 p-4 rounded-xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Program Selesai</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $completedCount }}
                </p>
            </div>
    
            <div class="bg-custom-50 p-4 rounded-xl shadow">
                <h3 class="text-md font-medium text-custom-200">Program On Going</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $ongoingCount }}
                </p>
            </div>
        </div>


        {{-- SEARCH & CREATE PROGRAM --}}
        <div class="flex justify-between my-2 gap-4 ">
            <label for="default-search" class="mb-2 text-sm font-medium text-custom-50 sr-only">Search</label>
            <form action="{{ route('admin.programs.index') }}" method="GET" class="mb-2 w-2/5 self-center rounded-xl">   
                <div class="relative flex gap-2">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-custom-50" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        name="search" 
                        id="default-search" 
                        placeholder="Cari program..." 
                        value="{{ request('search') }}" 
                        class="block w-full p-4 py-2 ps-10 text-sm border border-custom-300 rounded-xl bg-custom-400 focus:ring-custom-200 focus:border-custom-200 focus:outline-custom-200" 
                    />
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2">
                        Search
                    </button>
                </div>
            </form>
            
            <a href="{{ route('admin.programs.create') }}" class="flex self-center bg-green-100 text-green-800 py-3 px-4 rounded-xl hover:bg-green-200 transition font-semibold gap-2"><ion-icon name="albums-outline" class="size-5 self-center"></ion-icon>Tambah Program</a>
        </div>

        {{-- GARIS --}}
        <hr/>

        {{-- FILTER  --}}
        <div class="flex my-4 space-x-4 w-full items-center">
            <form action="{{ route('admin.programs.index') }}" method="GET" class="grid grid-cols-4 gap-4 w-1/2">
                <input type="hidden" name="search" value="{{ request('search') }}">
        
                <!-- Semua -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-pink-100 text-pink-800">
                    <input 
                        id="bordered-radio-1" 
                        type="radio" 
                        value="" 
                        name="status" 
                        class="w-4 h-4 text-pink-800 bg-pink-100 border-gray-300 focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-pink-900 dark:border-gray-600" 
                        {{ request('status') == '' ? 'checked' : '' }}
                        onclick="filterByStatus('')">
                    <label for="bordered-radio-1" class="ml-2 text-sm font-medium text-pink-800 dark:text-pink-300">Semua</label>
                </div>
        
                <!-- Complete -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-green-100 text-green-800">
                    <input 
                        id="bordered-radio-2" 
                        type="radio" 
                        value="complete" 
                        name="status" 
                        class="w-4 h-4 text-green-800 bg-green-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-green-900 dark:border-gray-600"
                        {{ request('status') == 'complete' ? 'checked' : '' }}
                        onclick="filterByStatus('complete')">
                    <label for="bordered-radio-2" class="ml-2 text-sm font-medium text-green-800 dark:text-green-300">Complete</label>
                </div>
        
                <!-- On Going -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-yellow-100 text-yellow-800">
                    <input 
                        id="bordered-radio-3" 
                        type="radio" 
                        value="ongoing" 
                        name="status" 
                        class="w-4 h-4 text-yellow-800 bg-yellow-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-yellow-900 dark:border-gray-600"
                        {{ request('status') == 'ongoing' ? 'checked' : '' }}
                        onclick="filterByStatus('ongoing')">
                    <label for="bordered-radio-3" class="ml-2 text-sm font-medium text-yellow-800 dark:text-yellow-300">On Going</label>
                </div>
        
                <!-- Closed -->
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700 bg-indigo-100 text-indigo-800">
                    <input 
                        id="bordered-radio-4" 
                        type="radio" 
                        value="closed" 
                        name="status" 
                        class="w-4 h-4 text-indigo-800 bg-indigo-100 border-gray-300 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-indigo-900 dark:border-gray-600"
                        {{ request('status') == 'closed' ? 'checked' : '' }}
                        onclick="filterByStatus('closed')">
                    <label for="bordered-radio-4" class="ml-2 text-sm font-medium text-indigo-800 dark:text-indigo-300">Closed</label>
                </div>
            </form>
        </div>
        
        
        {{-- TABLES --}}
        <div class="relative overflow-x-hidden rounded-xl">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 program-table">
                <thead class="text-sm text-custom-500 uppercase bg-custom-300">
                    <tr>
                        <th class="px-6 py-5">Gambar</th>
                        <th class="px-6 py-5">Nama Program</th>
                        <th class="px-6 py-5">Status</th>
                        <th class="px-6 py-5">Deskripsi</th>
                        <th class="px-6 py-5">Progress</th>
                        <th class="px-6 py-5">Periode</th>
                        <th class="px-6 py-5">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programs as $program)
                    <tr class="bg-custom-400 border-b border-custom-300 last:border-b-0">                      
                        <!-- Display Image -->
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
                        <td class="px-6 py-4 max-w-2xs break-words whitespace-normal">{{ Str::limit($program->deskripsi, 50) }}</td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500" 
                                        style="width: {{ min(100, $program->jumlah_target > 0 ? round(($program->donasi_sum_jumlah / $program->jumlah_target) * 100, 2) : 0) }}%;"></div>
                                </div>
                                <div class="self-center">
                                    {{ min(100, $program->jumlah_target > 0 ? round(($program->donasi_sum_jumlah / $program->jumlah_target) * 100, 2) : 0) }}%
                                </div>
                            </div>
                            <div class="text-xs">
                                {{ number_format($program->donasi_sum_jumlah ?? 0, 2) }} / {{ number_format($program->jumlah_target, 2) }}
                            </div>
                        </td>
                        <td class="px-6 py-4 max-w-2xs truncate">
                            {{ \Carbon\Carbon::parse($program->tgl_mulai)->format('d F Y') }} - 
                            {{ $program->tgl_selesai ? \Carbon\Carbon::parse($program->tgl_selesai)->format('d F Y') : 'Tidak ditentukan' }}
                        </td>                        
                        <td class="px-6 py-4">
                            <div class="relative inline-block text-left">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownAction{{ $program->id }}" 
                                    class=" hover:bg-custom-100 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center bg-custom-50 hover:text-white" 
                                    type="button">
                                    Action
                                    <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l4 4 4-4"/>
                                    </svg>
                                </button>

                                <!-- Dropdown menu -->
                                <div id="dropdownAction{{ $program->id }}" class="z-10 hidden bg-custom-75 divide-y divide-gray-100 rounded-lg shadow w-22">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="{{ route('admin.programs.edit', $program->id) }}" class="block px-4 py-2 hover:bg-gray-100">Edit</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="block px-4 py-2 text-left w-full hover:bg-gray-100" onclick="return confirm('Yakin ingin menghapus program ini?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    @empty
                    <tr>
                        <td colspan="8" class="py-2 px-4 text-center border border-custom-300">Belum ada program.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

<script>
    function filterByStatus(status) {
        const url = new URL(window.location.href);
        url.searchParams.set('status', status); // Set parameter status di URL
        window.location.href = url.toString(); // Redirect ke URL baru
    }
</script>