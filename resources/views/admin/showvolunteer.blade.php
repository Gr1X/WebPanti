@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Daftar Volunteer</h2>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tabel Volunteer -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nama</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">No Telepon</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Alamat</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Gender</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Bidang</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Catatan</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($volunteers as $volunteer)
                <tr class="border-b">
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $volunteer->nama }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $volunteer->email }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $volunteer->no_telp }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $volunteer->alamat }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $volunteer->gender }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ ucfirst($volunteer->bidang) }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $volunteer->catatan ?? '-' }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">
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
