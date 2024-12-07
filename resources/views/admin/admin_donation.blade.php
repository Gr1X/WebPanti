@extends('layout.app')

@section('content')
<div class="pt-[200px] bg-gray-100 min-h-screen px-14 gap-4">
    <div class="mb-8">
        <div class="mb-8 flex justify-between">
            <div>
                <h1 class="text-4xl font-bold text-slate-600">Kelola Program Donasi</h1>
                <p class="text-lg text-gray-600">Tambah, edit, atau hapus program donasi untuk mendukung mereka yang membutuhkan.</p>
            </div>
            <div>
                <button 
                    id="addProgramButton" 
                    class="text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-md px-5 py-2.5">
                    Tambah Program
                </button>
            </div>
        </div>

        <!-- Form Tambah/Edit Program -->
        <div id="programForm" class="hidden bg-white p-6 rounded-lg shadow-lg">
            <h2 id="formTitle" class="text-2xl font-semibold mb-4">Tambah Program</h2>
            <form id="programFormSubmit" action="{{ route('admin.program.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="programId">
                
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul Program</label>
                    <input type="text" name="title" id="title" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="description" id="description" rows="4" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="image" id="image" class="block w-full mt-1">
                </div>
                
                <div class="mb-4">
                    <label for="progress" class="block text-sm font-medium text-gray-700">Progress (%)</label>
                    <input type="number" name="progress" id="progress" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="flex justify-end">
                    <button type="button" id="cancelButton" class="text-gray-700 bg-gray-200 hover:bg-gray-300 font-medium rounded-lg px-5 py-2.5 mr-2">Batal</button>
                    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg px-5 py-2.5">Simpan</button>
                </div>
            </form>
        </div>

        <!-- Daftar Program -->
        <div class="grid grid-cols-3 gap-8 mt-8">
            @foreach ($programs as $program)
            <div class="bg-white rounded-md shadow-lg overflow-hidden max-w-md">
                <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">{{ $program->title }}</h2>
                    <p class="text-sm text-gray-700 mb-2">{{ $program->description }}</p>
                    <hr class="my-4">
                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 my-1">
                        <div class="bg-blue-400 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: {{ $program->progress }}%;">{{ $program->progress }}%</div>
                    </div>
                    <div class="flex justify-between mt-4">
                        <button 
                            data-id="{{ $program->id }}" 
                            data-title="{{ $program->title }}" 
                            data-description="{{ $program->description }}" 
                            data-progress="{{ $program->progress }}" 
                            class="editButton text-white bg-yellow-500 hover:bg-yellow-600 px-4 py-2 rounded-lg">
                            Edit
                        </button>
                        <form action="{{ route('admin.program.destroy', $program->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    // Tampilkan form tambah/edit program
    document.getElementById('addProgramButton').addEventListener('click', () => {
        document.getElementById('programForm').classList.remove('hidden');
        document.getElementById('formTitle').innerText = 'Tambah Program';
        document.getElementById('programFormSubmit').reset();
    });

    // Cancel button
    document.getElementById('cancelButton').addEventListener('click', () => {
        document.getElementById('programForm').classList.add('hidden');
    });

    // Edit button
    document.querySelectorAll('.editButton').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = e.target.dataset.id;
            const title = e.target.dataset.title;
            const description = e.target.dataset.description;
            const progress = e.target.dataset.progress;

            document.getElementById('programId').value = id;
            document.getElementById('title').value = title;
            document.getElementById('description').value = description;
            document.getElementById('progress').value = progress;

            document.getElementById('formTitle').innerText = 'Edit Program';
            document.getElementById('programForm').classList.remove('hidden');
        });
    });
</script>
@endsection
