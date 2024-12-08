<form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

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
        <label for="jumlah_target" class="block text-sm font-medium text-gray-700">Target Dana</label>
        <input type="number" id="jumlah_target" name="jumlah_target" step="0.01" value="{{ old('jumlah_target', $program->jumlah_target ?? '') }}" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
    </div>

    <div>
        <label for="tgl_mulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
        <input type="date" id="tgl_mulai" name="tgl_mulai" value="{{ old('tgl_mulai', $program->tgl_mulai ?? '') }}" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
    </div>

    <div>
        <label for="tgl_selesai" class="block text-sm font-medium text-gray-700">Tanggal Selesai</label>
        <input type="date" id="tgl_selesai" name="tgl_selesai" value="{{ old('tgl_selesai', $program->tgl_selesai ?? '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
    </div>

    <div>
        <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
        <input type="file" id="gambar" name="gambar"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        @if(isset($program) && $program->gambar)
        <div class="mt-4">
            <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->namaprogram }}" class="w-36 rounded-md shadow">
        </div>
        @endif
    </div>

    <button type="submit" class="my-3 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50 active:bg-blue-800 transition duration-300 ease-in-out transform hover:scale-105">
        Simpan
    </button>
</form>
