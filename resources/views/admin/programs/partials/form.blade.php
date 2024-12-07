<form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="namaprogram" class="form-label">Nama Program</label>
        <input type="text" class="form-control" id="namaprogram" name="namaprogram" value="{{ old('namaprogram', $program->namaprogram ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $program->deskripsi ?? '') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="jumlah_target" class="form-label">Target Dana</label>
        <input type="number" class="form-control" id="jumlah_target" name="jumlah_target" step="0.01" value="{{ old('jumlah_target', $program->jumlah_target ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="{{ old('tgl_mulai', $program->tgl_mulai ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
        <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="{{ old('tgl_selesai', $program->tgl_selesai ?? '') }}">
    </div>

    <div class="mb-3">
        <label for="gambar" class="form-label">Upload Gambar</label>
        <input type="file" class="form-control" id="gambar" name="gambar">
        @if(isset($program) && $program->gambar)
        <div class="mt-2">
            <img src="{{ asset('storage/' . $program->gambar) }}" alt="{{ $program->namaprogram }}" style="width: 150px;">
        </div>
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
