@extends('layout.admin')

@section('content')
<div class="m-10">
    <div class="mb-4">
        <h2 class="text-4xl font-bold">Volunteer</h2>
    </div>

    {{-- CARD INFO --}}
    <div class="grid grid-cols-3 gap-4 my-4">
        <div class="bg-gray-800 p-4 rounded-xl shadow">
            <h3 class="text-sm font-medium text-gray-400">Total Volunteer</h3>
            <div class="flex gap-2">
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $jumlahVol }}
                </p>
            </div>
        </div>

        {{-- Gender --}}
        <div class="grid grid-cols-2 gap-2 text-center">
            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Laki-laki</h3>
                <p class="text-3xl font-bold text-white mt-2 text-center">
                    {{ $genderCounts['Laki-laki'] ?? 0 }}
                </p>
            </div>

            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Perempuan</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $genderCounts['Perempuan'] ?? 0 }}
                </p>
            </div>
        </div>

        {{-- Bidang --}}
        <div class="grid grid-cols-3 gap-2 text-center">
            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Dokter</h3>
                <p class="text-3xl font-bold text-white mt-2 text-center">
                    {{ $bidangCounts['dokter'] ?? 0 }}
                </p>
            </div>

            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Sosial</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $bidangCounts['sosial'] ?? 0 }}
                </p>
            </div>

            <div class="bg-gray-800 p-4 rounded-xl shadow">
                <h3 class="text-sm font-medium text-gray-400">Pendidikan</h3>
                <p class="text-3xl font-bold text-white mt-2">
                    {{ $bidangCounts['pendidikan'] ?? 0 }}
                </p>
            </div>
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
    </div>

    <hr class="my-4"/>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="relative overflow-x-auto rounded-xl">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 last:border-b-0">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $volunteer->nama }}
                    </th>
                    <td class="px-6 py-4">{{ $volunteer->email }}</td>
                    <td class="px-6 py-4">{{ $volunteer->no_telp }}</td>
                    <td class="px-6 py-4">{{ $volunteer->alamat }}</td>
                    <td class="px-6 py-4">{{ $volunteer->gender }}</td>
                    <td class="px-6 py-4">{{ ucfirst($volunteer->bidang) }}</td>
                    <td class="px-6 py-4">{{ $volunteer->catatan ?? '-' }}</td>
                    <td class="px-6 py-4">
                        <!-- Tombol Delete -->
                        <form action="{{ route('admin.volunteers.destroy', $volunteer->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">
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
