@extends('layout.admin')

@section('content')
<div class="container">
    <h1>Edit Gallery</h1>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary mb-3">Tambah Foto</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach ($galleries as $gallery)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $gallery->gambar) }}" class="card-img-top" alt="Gallery Image">
                    <div class="card-body">
                        <p class="card-text">Tanggal: {{ $gallery->tgl_gallery }}</p>
                        <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('admin.gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
