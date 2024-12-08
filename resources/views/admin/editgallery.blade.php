@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Edit Gallery</h1>
    <a href="{{ route('admin.gallery.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 mb-6 inline-block">Tambah Foto</a>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Gambar</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Tanggal</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($galleries as $index => $gallery)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <img src="{{ asset('storage/' . $gallery->gambar) }}" 
                                 alt="Gallery Image" 
                                 class="w-32 h-24 object-cover rounded-lg shadow-sm">
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $gallery->tgl_gallery }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.gallery.edit', $gallery->id) }}" 
                                   class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 text-sm">Edit</a>
                                <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 text-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="border border-gray-300 px-4 py-2 text-center text-gray-500">Tidak ada data galeri.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
