@extends('layout.admin')

@section('content')
<div class="m-10">
    <div class="mb-4">
        <h2 class="text-5xl font-bold">Volunteer</h2>
    </div>

    {{-- CARD INFO --}}
    <div class="grid grid-cols-3 gap-4 my-4">
        {{-- Total Volunteer --}}
        <div class="bg-custom-50 p-4 rounded-2xl shadow">
            <h3 class="text-md font-semibold text-custom-200">Total Volunteer</h3>
            <div class="flex gap-2">
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $jumlahVol }}
                </p>
            </div>
        </div>

        {{-- Gender --}}
        <div class="grid grid-cols-2 gap-2 text-center">
            {{-- Laki-laki --}}
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Laki-laki</h3>
                <p class="text-3xl font-bold text-white mt-2 text-center">
                    {{ $genderCounts['Laki-laki'] ?? 0 }}
                </p>
            </div>

            {{-- Perempuan --}}
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Perempuan</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $genderCounts['Perempuan'] ?? 0 }}
                </p>
            </div>
        </div>

        {{-- Bidang --}}
        <div class="grid grid-cols-3 gap-2 text-center">
            {{-- Dokter --}}
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Dokter</h3>
                <p class="text-3xl font-bold text-white mt-2 text-center">
                    {{ $bidangCounts['dokter'] ?? 0 }}
                </p>
            </div>

            {{-- Sosial --}}
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Sosial</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $bidangCounts['sosial'] ?? 0 }}
                </p>
            </div>

            {{-- Pendidikan --}}
            <div class="bg-custom-50 p-4 rounded-2xl shadow">
                <h3 class="text-md font-semibold text-custom-200">Pendidikan</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $bidangCounts['pendidikan'] ?? 0 }}
                </p>
            </div>
        </div>
    </div>


    {{-- SEARCH --}}
    <div class="flex justify-between my-2 gap-4">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <form action="{{ route('admin.volunteers.index') }}" method="GET" class="mb-2 w-2/5 self-center rounded-xl">   
            <div class="relative flex gap-2">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input 
                    type="search" 
                    name="search" 
                    id="default-search" 
                    class="block w-full p-4 py-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                    placeholder="Search..." 
                    value="{{ request('search') }}" 
                />
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Search
                </button>
            </div>
        </form>
    </div>

    <hr class="my-4"/>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="relative overflow-x-auto rounded-xl">
        <table class="w-full text-sm text-left rtl:text-right text-gray-800">
            <thead class="text-sm text-custom-500 uppercase bg-custom-300">
                <tr>
                    <th scope="col" class="px-6 py-5">Nama</th>
                    <th scope="col" class="px-6 py-5">Email</th>
                    <th scope="col" class="px-6 py-5">No Telepon</th>
                    <th scope="col" class="px-6 py-5">Alamat</th>
                    <th scope="col" class="px-6 py-5">Gender</th>
                    <th scope="col" class="px-6 py-5">Bidang</th>
                    <th scope="col" class="px-6 py-5">Catatan</th>
                    <th scope="col" class="px-6 py-5">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($volunteers as $volunteer)
                <tr class="bg-custom-400 border-b border-custom-300 last:border-b-0">
                    <th scope="row" class="px-6 py-4 font-medium text-custom-50 whitespace-nowrap">
                        {{ $volunteer->nama }}
                    </th>
                    <td class="px-6 py-4 text-custom-50">{{ $volunteer->email }}</td>
                    <td class="px-6 py-4 text-custom-50">{{ $volunteer->no_telp }}</td>
                    <td class="px-6 py-4 text-custom-50">{{ $volunteer->alamat }}</td>
                    <td class="px-6 py-4 text-custom-50">{{ $volunteer->gender }}</td>
                    <td class="px-6 py-4 text-custom-50">{{ ucfirst($volunteer->bidang) }}</td>
                    <td class="px-6 py-4 text-custom-50">{{ $volunteer->catatan ?? '-' }}</td>
                    <td class="px-6 py-4">
                        <!-- Tombol Delete -->
                        <form action="{{ route('admin.volunteers.destroy', $volunteer->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@endsection
