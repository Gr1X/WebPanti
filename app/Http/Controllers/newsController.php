<?php

namespace App\Http\Controllers;
use App\Models\BeritaPanti;
use Illuminate\Http\Request;

class newsController extends Controller
{
    /**
     * Display a listing of the programs.
     */
    
    public function index(){
        // Ambil data yang diperlukan untuk dashboard// Ambil data program dan jumlah donasi
        $datas = BeritaPanti::all();
        // Kirimkan data ke view
        return view('admin.newsAdmin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new program.
     */
    public function create()
    {
        return view('admin.newsAdmin.create');
    }

    /**
     * Store a newly created program in the database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'namaprogram' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_target' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
        ]);

        // Ambil semua data input
        $data = $request->all();

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Simpan gambar ke folder storage/app/public/program-images dan dapatkan path-nya
            $data['gambar'] = $request->file('gambar')->store('program-images', 'public');
        }

        // Simpan program baru ke database
        Target::create($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified program.
     */
    public function edit($id)
    {
        $program = Target::findOrFail($id);
        return view('admin.programs.edit', compact('program'));
    }

    /**
     * Update the specified program in the database.
     */
    public function update(Request $request, $id)
    {
        // Cari program yang akan diupdate
        $program = Target::findOrFail($id);

        // Validasi input
        $request->validate([
            'namaprogram' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_target' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
        ]);

        // Ambil semua data input
        $data = $request->all();

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($program->gambar) {
                Storage::disk('public')->delete($program->gambar);
            }

            // Simpan gambar baru ke folder storage/app/public/program-images
            $data['gambar'] = $request->file('gambar')->store('program-images', 'public');
        }

        // Update data program
        $program->update($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    /**
     * Remove the specified program from the database.
     */
    public function destroy($id)
    {
        // Cari program yang akan dihapus
        $program = Target::findOrFail($id);

        // Hapus gambar jika ada
        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        // Hapus program dari database
        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil dihapus.');
    }
}
