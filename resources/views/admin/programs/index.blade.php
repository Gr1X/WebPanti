@extends('layout.admin')

@section('content')
    <div class="container mx-auto mt-8 px-4">
        <!-- Heading and Add Program Button -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-primary">Daftar Program Panti Asuhan</h1>
            <a href="{{ route('admin.programs.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition">Tambah Program</a>
        </div>

        <!-- Table Program -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border border-gray-300">#</th>
                        <th class="py-2 px-4 border border-gray-300">Gambar</th>
                        <th class="py-2 px-4 border border-gray-300">Nama Program</th>
                        <th class="py-2 px-4 border border-gray-300">Deskripsi</th>
                        <th class="py-2 px-4 border border-gray-300">Target</th>
                        <th class="py-2 px-4 border border-gray-300">Progress</th>
                        <th class="py-2 px-4 border border-gray-300">Periode</th>
                        <th class="py-2 px-4 border border-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($programs as $program)
                    <tr class="odd:bg-gray-100 even:bg-white hover:bg-gray-200">
                        <td class="py-2 px-4 border border-gray-300">{{ $loop->iteration }}</td>
                        
                        <!-- Display Image -->
                        <td class="py-2 px-4 border border-gray-300">
                            @if($program->gambar)
                                <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->namaprogram }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-500">No Image</span>
                            @endif
                        </td>

                        <td class="py-2 px-4 border border-gray-300">{{ $program->namaprogram }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ Str::limit($program->deskripsi, 50) }}</td>
                        <td class="py-2 px-4 border border-gray-300">{{ number_format($program->jumlah_target, 2) }}</td>
                        <td class="py-2 px-4 border border-gray-300">
                            {{ number_format($program->donasi_sum_jumlah ?? 0, 2) }} / {{ number_format($program->jumlah_target, 2) }}
                            ({{ $program->jumlah_target > 0 ? round(($program->donasi_sum_jumlah / $program->jumlah_target) * 100, 2) : 0 }}%)
                        </td>
                        <td class="py-2 px-4 border border-gray-300">{{ $program->tgl_mulai }} - {{ $program->tgl_selesai ?? 'Tidak ditentukan' }}</td>
                        <td class="py-2 px-4 border border-gray-300">
                            <a href="{{ route('admin.programs.edit', $program->id) }}" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus program ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="py-2 px-4 text-center border border-gray-300">Belum ada program.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
