<form action="{{ isset($datas) ? route('admin.news.update', $datas->id) : route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($datas))
        @method('PUT')
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6">
        <!-- Kolom Upload Gambar -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Upload Gambar</label>
            <div id="dropzone" class="mt-1 flex justify-center items-center px-6 pt-5 pb-6 border-4 border-dashed rounded-xl relative min-h-[360px] cursor-pointer" onclick="triggerFileInput()">
                <div id="upload-prompt" class="space-y-1 text-center {{ isset($datas) && $datas->gambar ? 'hidden' : '' }}">
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
                <div id="preview" class="absolute inset-0 flex items-center justify-center {{ isset($datas) && $datas->gambar ? '' : 'hidden' }}" onclick="triggerFileInput()">
                    @if(isset($datas) && $datas->gambar)
                        <img src="{{ asset('storage/' . $datas->gambar) }}" alt="Preview" class="w-full h-full object-cover rounded-md">
                    @endif
                </div>
            </div>
        </div>

        <!-- Kolom Input -->
        <div class="col-span-2 space-y-4 mt-4 md:mt-0">
            <!-- Judul Berita -->
            <div>
                <label for="judul" class="block text-sm font-medium text-gray-700">Judul Berita</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul', $datas->judul ?? '') }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <!-- Deskripsi Berita -->
            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Berita</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('deskripsi', $datas->deskripsi ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Tombol Simpan -->
    <div class="w-full flex justify-end mt-4">
        <button type="submit" class="px-10 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 active:bg-blue-800 transition duration-300 ease-in-out transform hover:scale-105">
            Simpan
        </button>
    </div>
</form>

<script>
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
