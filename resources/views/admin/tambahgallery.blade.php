@extends('layout.admin')

@section('content')
<div class="m-10">
    <div class="">
        <h1 class="text-4xl font-bold mb-4">Tambah Gallery</h1>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-custom-50 p-6 rounded-xl">
            <div class="flex gap-6">
                <!-- Kolom Upload Gambar -->
                <div class="w-1/3">
                    <div id="dropzone" class="mt-1 flex justify-center items-center px-6 pt-5 pb-6 border-4 border-dashed rounded-xl relative min-h-[360px] cursor-pointer" onclick="triggerFileInput()">
                        <div id="upload-prompt" class="space-y-1 text-center">
                            <ion-icon name="cloud-upload-outline" class="mx-auto h-16 w-16 text-gray-400"></ion-icon>
                            <div class="flex text-sm text-gray-600 justify-center">
                                <label for="gambar" class="relative cursor-pointer rounded-md font-medium text-blue-600">
                                    <span>Upload a file</span>
                                    <input id="gambar" name="gambar" type="file" class="sr-only" onchange="handleFileUpload(event)" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        <div id="preview" class="absolute inset-0 flex items-center justify-center hidden" onclick="triggerFileInput()"></div>
                    </div>
                </div>
        
                <!-- Kolom Kalender -->
                <div class="w-2/3">
                    <div>
                        <div id="calendar" class="w-full"></div> <!-- Kalender memenuhi lebar penuh -->
                        <input type="hidden" id="tgl_gallery" name="tgl_gallery" required>
                    </div>
                </div>
            </div>
            <!-- Tombol Simpan -->
            <div class="w-full flex justify-end mt-4">
                <button type="submit" class="px-10 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 active:bg-blue-800 transition duration-300 ease-in-out transform hover:scale-105">
                    Tambah
                </button>
            </div>

        </div>
    
    </form>    
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    // Inisialisasi Flatpickr dengan mode inline
    flatpickr("#calendar", {
        inline: true, // Kalender ditampilkan secara fixed
        dateFormat: "Y-m-d", // Format tanggal untuk database
        altInput: false, // Tidak perlu input alternatif
        onChange: function(selectedDates, dateStr) {
            // Sinkronkan tanggal yang dipilih ke input hidden
            document.getElementById('tgl_gallery').value = dateStr;
        }
    });

    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const uploadPrompt = document.getElementById('upload-prompt');

    // Trigger file input on click
    function triggerFileInput() {
        fileInput.click();
    }

    // Drag-and-drop events
    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.classList.add('border-blue-500', 'bg-blue-50');
    });

    dropzone.addEventListener('dragleave', () => {
        dropzone.classList.remove('border-blue-500', 'bg-blue-50');
    });

    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.classList.remove('border-blue-500', 'bg-blue-50');
        const files = e.dataTransfer.files;
        fileInput.files = files;
        handleFileUpload({ target: fileInput });
    });

    // Handle file upload and preview
    function handleFileUpload(event) {
        const files = event.target.files;
        preview.innerHTML = '';
        if (files.length > 0) {
            const file = files[0];
            const reader = new FileReader();
            reader.onload = function (e) {
                uploadPrompt.classList.add('hidden'); // Hide upload prompt
                preview.classList.remove('hidden'); // Show preview
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-full', 'object-cover', 'rounded-md');
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        } else {
            uploadPrompt.classList.remove('hidden'); // Show upload prompt
            preview.classList.add('hidden'); // Hide preview
        }
    }
</script>
@endsection
