@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Program Panti Asuhan</h1>

    <!-- Button Tambah Program -->
    <a href="{{ route('admin.programs.create') }}" class="btn btn-primary mb-3">Tambah Program</a>

    <!-- Tabel Program -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Program</th>
                    <th>Deskripsi</th>
                    <th>Target</th>
                    <th>Progress</th>
                    <th>Periode</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($programs as $program)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $program->namaprogram }}</td>
                    <td>{{ $program->deskripsi }}</td>
                    <td>{{ number_format($program->jumlah_target, 2) }}</td>
                    <td>
                        {{ number_format($program->terkumpul, 2) }} / {{ number_format($program->jumlah_target, 2) }}
                        ({{ round(($program->terkumpul / $program->jumlah_target) * 100, 2) }}%)
                    </td>
                    <td>{{ $program->tgl_mulai }} - {{ $program->tgl_selesai ?? 'Tidak ditentukan' }}</td>
                    <td>
                        <a href="{{ route('admin.programs.edit', $program->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.programs.destroy', $program->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus program ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada program.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
