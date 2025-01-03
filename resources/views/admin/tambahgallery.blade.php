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
    <div class="">
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="border-dashed border-custom-200 p-2 border-4 rounded-xl">
                <div class="bg-custom-50 p-6 rounded-xl">
                    <div class="flex justify-between gap-6">
                        <!-- Kolom Upload Gambar -->
                        <div class="w-1/2">
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
                    <div class="w-1/2">
                        <div id="datepicker-container" class="h-full">
                            <div id="datepicker-inline" class="w-full"></div>
                            <input type="hidden" id="tgl_gallery" name="tgl_gallery" required>
                        </div>
                    </div>
        
                    </div>
                    <!-- Tombol Simpan -->
                    <div class="w-full flex justify-end mt-4">
                        <button type="submit" class="px-10 py-3 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-custom-300 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-yellow-400 focus:ring-opacity-50 active:bg-yellow-800 transition duration-300 hover:scale-105">
                            Tambah
                        </button>
                    </div>
        
                </div>
            </div>
        </form>    
    </div>
</div>   


<script>
    document.addEventListener('DOMContentLoaded', function () {
    const datepickerElement = document.querySelector('#datepicker-inline');
    const tglGalleryInput = document.querySelector('#tgl_gallery');

    // Inisialisasi Datepicker
    const datepicker = new Datepicker(datepickerElement, {
        format: 'yyyy-mm-dd', // Format tanggal yang diinginkan
        autohide: true,
        inline: true,
        todayHighlight: true,
    });

    const applyStyling = () => {
    const datepickerPicker = document.querySelector('.datepicker-picker');
    if (datepickerPicker) {
        console.log('Styling applied to datepicker-picker:', datepickerPicker);

        // Terapkan styling dengan JavaScript
        datepickerPicker.style.width = '100%'; // Atur lebar
        datepickerPicker.style.padding = '2rem'; // Atur padding
        datepickerPicker.style.backgroundColor = '#ffffff'; // Latar belakang
        datepickerPicker.style.borderRadius = '12px'; // Border radius
        datepickerPicker.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)'; // Shadow
    } else {
        console.log('Element datepicker-picker belum ditemukan, mencoba ulang...');
        setTimeout(applyStyling, 100); // Coba ulang setelah 100ms
    }

    const datepickerGrid = document.querySelector('.datepicker-grid');
    if (datepickerGrid) {
        // Styling grid kalender
        datepickerGrid.style.gridTemplateColumns = 'repeat(7, 1fr)'; // 7 kolom
        
    } else {
        console.log('Element datepicker-grid belum ditemukan, mencoba ulang...');
        setTimeout(applyStyling, 100); // Tunggu jika elemen belum ada
    }

    const datepickerView = document.querySelector('.datepicker-view.flex');
    if (datepickerView) {
        // Pastikan elemen menggunakan Flexbox dengan konten sejajar di tengah
        datepickerView.style.display = 'flex';
        datepickerView.style.justifyContent = 'center'; // Atur konten ke tengah secara horizontal
        datepickerView.style.alignItems = 'center'; // Atur konten ke tengah secara vertikal
        datepickerView.style.flexDirection = 'column'; // Jika perlu mengatur arah konten
    }
};


    // Jalankan styling setelah datepicker diinisialisasi
    applyStyling();

    // Update input tersembunyi saat tanggal dipilih
    datepickerElement.addEventListener('changeDate', function () {
        const selectedDate = datepicker.getDate();
        if (selectedDate) {
            const formattedDate = formatDate(selectedDate); // Konversi ke format 'yyyy-mm-dd'
            tglGalleryInput.value = formattedDate;
            console.log('Tanggal yang dipilih:', formattedDate); // Debug log
        }
    });
});

// Fungsi untuk memformat tanggal
function formatDate(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
}



    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('gambar');
    const preview = document.getElementById('preview');
    const uploadPrompt = document.getElementById('upload-prompt');
    const tglGalleryInput = document.getElementById('tgl_gallery');

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
