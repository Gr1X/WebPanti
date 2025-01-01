@extends('layout.admin')

@section('content')
<div class="m-10">
    <h1 class="text-4xl font-bold mb-4">Tambah Berita Baru</h1>

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.newsAdmin.partials.form', ['datas' => null])
    </form>
</div>
@endsection
