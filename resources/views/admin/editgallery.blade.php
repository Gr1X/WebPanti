@extends('layout.admin')

@section('content')
<div class="m-10">
    <div class="">
        <h1 class="text-4xl font-bold mb-4">Gallery</h1>
    </div>

    <div class="flex justify-between mb-4 gap-2">
        <span class="self-center bg-gray-100 p-3 rounded-lg">
            <div class="flex self-center space-x-2" data-dropdown-toggle="dropdownBottom">
                <ion-icon name="calendar-clear-outline" class="size-5 self-center"></ion-icon>
                <span class="self-center text-sm font-semibold">Filter by Year</span>
                <ion-icon name="chevron-down-outline" class="size-5 self-center"></ion-icon>
            </div>
            <div id="dropdownBottom" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2024</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2023</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2022</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">2021</a>
                    </li>
                </ul>
            </div>
        </span>
        <a href="{{ route('admin.gallery.create') }}"" class="flex self-center bg-green-100 text-green-800 py-3 px-4 rounded-xl hover:bg-green-200 transition font-semibold gap-2"><ion-icon name="albums-outline" class="size-5 self-center"></ion-icon>Tambah Foto</a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
            {{ session('success') }}
        </div>
    @endif
    
    

    <div class="relative overflow-x-auto rounded-xl">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-sm text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="px-6 py-5">No.</th> --}}
                    <th scope="col" class="px-6 py-5">Gambar</th>
                    <th scope="col" class="px-6 py-5">Tanggal</th>
                    <th scope="col" class="px-6 py-5">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($galleries as $index => $gallery)
                <tr class="bg-white border-b border-gray-200 last:border-b-0 dark:bg-gray-800 dark:border-gray-700">
                    {{-- <td class="px-6 py-4">
                        {{ $index + 1 }}
                    </td> --}}
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset('storage/' . $gallery->gambar) }}" 
                        alt="Gallery Image" 
                        class="w-32 h-24 object-cover rounded-lg shadow-sm">
                    </th>
                    <td class="px-6 py-4">
                        {{ $gallery->tgl_gallery }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="grid gap-2 text-center">
                            <a href="{{ route('admin.gallery.edit', $gallery->id) }}" 
                            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 text-sm w-full">Edit</a>
                            <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" 
                                method="POST" 
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 text-sm w-full">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="border-b px-4 py-8 text-center text-gray-500">Belum ada foto di gallery.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
