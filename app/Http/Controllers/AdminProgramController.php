<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target; // Model untuk tabel target
use Illuminate\Support\Facades\Storage;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the programs.
     */
    public function index()
    {
        $programs = Target::all(); // Mengambil semua data dari tabel 'target'
        return view('admin.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new program.
     */
    public function create()
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created program in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaprogram' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_target' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
        ]);

        $data = $request->all();
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('program-images', 'public');
        }

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
        $program = Target::findOrFail($id);

        $request->validate([
            'namaprogram' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'jumlah_target' => 'nullable|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'nullable|date|after_or_equal:tgl_mulai',
        ]);

        $data = $request->all();
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($program->gambar) {
                Storage::disk('public')->delete($program->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('program-images', 'public');
        }

        $program->update($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil diperbarui.');
    }

    /**
     * Remove the specified program from the database.
     */
    public function destroy($id)
    {
        $program = Target::findOrFail($id);

        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program berhasil dihapus.');
    }
}
