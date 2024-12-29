@extends('layout.admin')

@section('content')
<div class="m-10">
    <h1 class="text-4xl font-bold mb-4">Edit Program</h1>

    <form action="{{ route('admin.programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.programs.partials.form', ['program' => $program])
    </form>
</div>
@endsection
