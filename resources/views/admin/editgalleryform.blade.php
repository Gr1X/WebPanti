@extends('layout.admin')

@section('content')
<div class="container">
    <h1>Edit Foto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Foto (opsional)</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="mb-3">
            <label for="tgl_gallery" class="form-label">Tanggal Foto</label>
            <input type="date" class="form-control" id="tgl_gallery" name="tgl_gallery" value="{{ $gallery->tgl_gallery }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
