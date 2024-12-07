@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Program Baru</h1>

    <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.programs.partials.form', ['program' => null])
        <div class="mt-3">
            <a href="{{ route('admin.programs.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
