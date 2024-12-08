@extends('layout.admin')

@section('content')
<div class="container mx-4">
    <h1 class="mb-4">Tambah Program Baru</h1>

    <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.programs.partials.form', ['program' => null])
    </form>
</div>
@endsection
