<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class EditGalleryController extends Controller
{
    /**
     * Menampilkan halaman edit gallery.
     */
    public function index(Request $request)
    {
        $tahun = $request->input('year'); // Ambil parameter tahun dari request
        $query = Gallery::query();

        if ($tahun) {
            $query->whereYear('tgl_gallery', $tahun);
        }

        $galleries = $query->get();
        $years = [2019, 2020, 2021, 2022, 2023, 2024];

        return view('admin.editgallery', compact('galleries', 'years', 'tahun'));
    }

    public function create()
    {
        return view('admin.tambahgallery');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.editgalleryform', compact('gallery'));
    }


    /**
     * Menyimpan gambar baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|max:10240',
            'tgl_gallery' => 'required|date',
        ]);

        $path = $request->file('gambar')->store('gallery', 'public');

        Gallery::create([
            'gambar' => $path,
            'tgl_gallery' => $request->tgl_gallery,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gambar berhasil ditambahkan.');
    }

    /**
     * Memperbarui data gambar.
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'tgl_gallery' => 'required|date',
        ]);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'image|max:10240',
            ]);

            // Hapus gambar lama
            Storage::disk('public')->delete($gallery->gambar);

            // Simpan gambar baru
            $gallery->gambar = $request->file('gambar')->store('gallery', 'public');
        }

        $gallery->tgl_gallery = $request->tgl_gallery;
        $gallery->save();

        return redirect()->route('admin.gallery.index')->with('success', 'Gambar berhasil diperbarui.');
    }

    /**
     * Menghapus gambar.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file gambar dari storage
        Storage::disk('public')->delete($gallery->gambar);

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gambar berhasil dihapus.');
    }
}
