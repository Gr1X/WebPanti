@extends('layout.admin')

@section('content')
<div class="m-10">
    <h1 class="text-4xl font-bold mb-4">Edit Program</h1>

    <form action="{{ route('admin.news.update', $datas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.newsAdmin.partials.form', ['datas' => $datas])
    </form>
</div>
@endsection
