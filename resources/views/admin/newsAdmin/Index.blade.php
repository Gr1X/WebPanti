@extends('layout.admin')

@section('content')
    <div class="m-10">

        {{-- HEADING --}}
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-4xl font-bold">Berita</h1>
        </div>


        {{-- SEARCH & CREATE PROGRAM --}}
        <div class="flex justify-between my-2 gap-4">
            {{-- Form Search --}}
            <form action="{{ route('admin.news.index') }}" method="GET" class="mb-2 w-2/5 self-center rounded-xl">   
                <div class="relative flex gap-2">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        name="search" 
                        id="default-search" 
                        placeholder="Cari berita..." 
                        value="{{ request('search') }}" 
                        class="block w-full p-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    />
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Search
                    </button>
                </div>
            </form>
            
            
            {{-- Button Tambah Berita --}}
            <a href="{{ route('admin.news.create') }}" class="flex self-center bg-green-100 text-green-800 py-3 px-4 rounded-xl hover:bg-green-200 transition font-semibold gap-2">
                <ion-icon name="add-outline" class="size-5 self-center"></ion-icon>
                Tambah Berita
            </a>
        </div>


        {{-- GARIS --}}
        <hr/>
        
        {{-- TABLES --}}
        <div class="relative overflow-x-hidden rounded-lg mt-4">
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
                            {{ \Carbon\Carbon::parse($data->tanggal_publikasi)->format('d F Y') }}
                        </td>
                        

                        <td class="px-6 py-4 max-w-2xs truncate">
                            {{ $data->tanggal_publikasi }}
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
