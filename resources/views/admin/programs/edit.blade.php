@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Program: {{ $program->namaprogram }}</h1>

    <form action="{{ route('admin.programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.programs.partials.form', ['program' => $program])
    </form>
</div>
@endsection
