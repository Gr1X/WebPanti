<form action="{{ isset($program) ? route('admin.programs.update', $program->id) : route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($program))
        @method('PUT')
    @endif

    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6">
        <!-- Kolom Upload Gambar -->
        <div>
            <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
            <div id="dropzone" class="mt-1 flex justify-center items-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md relative min-h-[360px] cursor-pointer" onclick="triggerFileInput()">
                <div id="upload-prompt" class="space-y-1 text-center {{ isset($program) && $program->gambar ? 'hidden' : '' }}">
                    <ion-icon name="cloud-upload-outline" class="mx-auto h-12 w-12 text-gray-400"></ion-icon>
                    <div class="flex text-sm text-gray-600 justify-center">
                        <label for="gambar" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500">
                            <span>Upload a file</span>
                            <input id="gambar" name="gambar" type="file" class="sr-only" onchange="handleFileUpload(event)" />
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
                <div id="preview" class="absolute inset-0 flex items-center justify-center {{ isset($program) && $program->gambar ? '' : 'hidden' }} cursor-pointer" onclick="triggerFileInput()">
                    @if(isset($program) && $program->gambar)
                        <img src="{{ asset('storage/' . $program->gambar) }}" alt="Preview" class="w-full h-full object-cover rounded-md">
                    @endif
                </div>
            </div>
        </div>

        <!-- Kolom Input -->
        <div class="col-span-2 space-y-4">
            <div>
                <label for="namaprogram" class="block text-sm font-medium text-gray-700">Nama Program</label>
                <input type="text" id="namaprogram" name="namaprogram" value="{{ old('namaprogram', $program->namaprogram ?? '') }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('deskripsi', $program->deskripsi ?? '') }}</textarea>
            </div>

            <div>
                <label for="jumlah_target_display" class="block text-sm font-medium text-gray-700">Target Dana</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
                    <input type="text" id="jumlah_target_display" value="{{ old('jumlah_target', isset($program) ? number_format($program->jumlah_target ?? 0, 0, ',', '.') : '') }}" required
                        class="pl-10 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        oninput="updateHiddenValue(this)">
                    <input type="hidden" id="jumlah_target" name="jumlah_target" value="{{ old('jumlah_target', $program->jumlah_target ?? 0) }}">
                </div>
            </div>

            <div class="flex gap-4">
                <div class="w-1/2">
                    <label for="tgl_mulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
                    <input type="date" id="tgl_mulai" name="tgl_mulai" value="{{ old('tgl_mulai', $program->tgl_mulai ?? '') }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div class="w-1/2">
                    <label for="tgl_selesai" class="block text-sm font-medium text-gray-700">Tanggal Selesai</label>
                    <input type="date" id="tgl_selesai" name="tgl_selesai" value="{{ old('tgl_selesai', $program->tgl_selesai ?? '') }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
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

    function handleFileUpload(event) {
        const files = event.target.files;
        preview.innerHTML = '';
        if (files.length > 0) {
            const file = files[0];
            const reader = new FileReader();
            reader.onload = function (e) {
                uploadPrompt.classList.add('hidden'); // Sembunyikan prompt upload
                preview.classList.remove('hidden'); // Tampilkan area preview
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-full', 'object-cover', 'rounded-md');
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        } else {
            uploadPrompt.classList.remove('hidden'); // Tampilkan kembali prompt upload jika tidak ada file
            preview.classList.add('hidden'); // Sembunyikan area preview
        }
    }

    function updateHiddenValue(input) {
        const cleanValue = input.value.replace(/[^0-9]/g, ''); // Hapus format
        document.getElementById('jumlah_target').value = cleanValue; // Set nilai asli ke input hidden
        const formattedValue = new Intl.NumberFormat('id-ID', { style: 'decimal', maximumFractionDigits: 0 }).format(cleanValue);
        input.value = formattedValue; // Tampilkan nilai terformat di input tampilan
    }
</script>
