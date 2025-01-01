@extends('layout.admin')

@section('content')
    <div class="m-10">

        {{-- HEADING --}}
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">Berita</h1>
        </div>
        
        {{-- CARD INFO  --}}
        <div class="grid grid-cols-3 gap-4 my-4">
            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Total Program</h3>
                <div class="flex gap-2">
                    <p class="text-3xl font-bold text-white mt-2">
                        14
                    </p>
                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300 self-center">1<ion-icon name="arrow-up-outline"></ion-icon></span>
                </div>
            </div>
    
            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Program Selesai</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    3
                </p>
            </div>
    
            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Program On Going</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    14
                </p>
            </div>
        </div>


        {{-- SEARCH & CREATE PROGRAM --}}
        <div class="flex justify-between my-2 gap-4 ">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <form class="mb-2 w-2/5 self-center rounded-xl">   
                <div class="relative flex gap-2">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
            
            <a href="{{ route('admin.news.create') }}" class="flex self-center bg-green-100 text-green-800 py-3 px-4 rounded-xl hover:bg-green-200 transition font-semibold gap-2"><ion-icon name="albums-outline" class="size-5 self-center"></ion-icon>Tambah Program</a>
        </div>

        {{-- GARIS --}}
        <hr/>

        {{-- FILTER  --}}
        <div class="flex my-4 space-x-4 w-full items-center">
            <div class="grid grid-cols-4 gap-4 w-1/2">
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                    <label for="bordered-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semua</label>
                </div>
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Complete</label>
                </div>
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-3" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-3" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">On Going</label>
                </div>
                <div class="flex items-center border border-gray-200 rounded px-4 py-2 dark:border-gray-700">
                    <input id="bordered-radio-4" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-radio-4" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Closed</label>
                </div>
            </div>
        </div>
        
        {{-- TABLES --}}
        <div class="relative overflow-x-hidden rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-5">Gambar</th>
                        <th class="px-6 py-5">Judul</th>
                        <th class="px-6 py-5">Deskripsi</th>
                        <th class="px-6 py-5">Tanggal Publish</th>
                        <th class="px-6 py-5">Last Update</th>
                        <th class="px-6 py-5">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($datas as $data)
                    <tr class="bg-white border-b border-gray-300 dark:bg-gray-800 dark:border-gray-700 last:border-b-0">                      
                        <!-- Display Image -->
                        <td class="px-6 py-4">
                            @if($data->gambar)
                                <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->judul }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-500">No Image</span>
                            @endif
                        </td>

                        <td class="px-6 py-4 truncate">{{ $data->judul }}</td>

                        <td class="px-6 py-4 break-words whitespace-normal">{{ $data->deskripsi }}</td>

                        <td class="px-6 py-4 max-w-2xs truncate">
                            {{ $data->update_at }}
                        </td>

                        <td class="px-6 py-4 max-w-2xs truncate">
                            {{ \Carbon\Carbon::parse($data->publish)->format('d F Y') }}
                        </td>     
                
                        <td class="px-6 py-4">
                            <div class="relative inline-block text-left">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdownAction{{ $data->id }}" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center" type="button">
                                    Action
                                    <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l4 4 4-4"/>
                                    </svg>
                                </button>
        
                                <!-- Dropdown menu -->
                                <div id="dropdownAction{{ $data->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="{{ route('admin.news.edit', $data->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admin.news.destroy', $data->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="block px-4 py-2 text-left w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="return confirm('Yakin ingin menghapus program ini?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <button class="block px-4 py-2 text-left w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="alert('Close action executed!')">
                                                Close
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        @empty
                        <tr>
                            <td colspan="8" class="py-2 px-4 text-center border border-gray-300">Belum ada program.</td>
                        </tr>
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
