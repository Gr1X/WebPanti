@extends('layout.admin')

@section('content')
<div class="my-10 mx-4 md:m-10">
    <div class="">
        <h1 class="text-5xl font-bold mb-4">Gallery</h1>
    </div>

    <div class="flex justify-between mb-4 gap-2">
        <form method="GET" action="{{ route('admin.gallery.index') }}" class="flex gap-2">
            <select name="year" 
                class="bg-custom-50 text-white px-9 rounded-lg text-md font-semibold border-0 focus:ring-2 focus:ring-custom-100 hover:bg-custom-100"
            >
                <option value="" class="bg-custom-75 text-sm hover:bg-custom-100">All Years</option>
                @foreach($years as $year)
                    <option 
                        class="bg-custom-75 text-sm text-semibold hover:bg-custom-100 hover:text-white" 
                        value="{{ $year }}" 
                        {{ isset($tahun) && $tahun == $year ? 'selected' : '' }}
                    >
                        {{ $year }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="bg-yellow-500 text-white px-3 py-3 rounded-xl">
                <ion-icon name="filter-outline" class="flex items-center size-5 font-bold"></ion-icon>
            </button>
        </form>
        <a href="{{ route('admin.gallery.create') }}" class="flex self-center bg-custom-50 text-custom-500 py-3 px-4 rounded-xl hover:bg-custom-75 transition font-semibold gap-2">
            <ion-icon name="albums-outline" class="size-5 self-center"></ion-icon>Tambah Foto
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="relative overflow-x-auto rounded-xl">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-sm text-custom-500 uppercase bg-custom-300">
                <tr>
                    <th scope="col" class="px-6 py-5">Gambar</th>
                    <th scope="col" class="px-6 py-5">Tanggal</th>
                    <th scope="col" class="px-6 py-5">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($galleries as $index => $gallery)
                <tr class="bg-custom-400 border-b border-custom-300 last:border-b-0">
                    <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">
                        <img src="{{ asset('storage/' . $gallery->gambar) }}" 
                        alt="Gallery Image" 
                        class="w-32 h-24 object-cover rounded-lg shadow-sm">
                    </th>
                    <td class="px-6 py-4 font-semibold text-gray-600">
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
