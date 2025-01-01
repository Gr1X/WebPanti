<?php

namespace App\Http\Controllers;

use App\Models\BeritaPanti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the news.
     */
    public function index()
    {
        // Ambil semua data berita dari tabel berita_panti
        $datas = BeritaPanti::all();
        
        // Kirim data ke view
        return view('admin.newsAdmin.index', compact('datas'));
    }

    /**
     * Show the form for creating a new news entry.
     */
    public function create()
    {
        return view('admin.newsAdmin.create');
    }

    /**
     * Store a newly created news entry in the database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'tanggal_publikasi' => 'nullable|date', // Diizinkan kosong untuk default ke waktu sekarang
        ]); 

        // Ambil semua data input
        $data = $request->only(['judul', 'deskripsi']);

        // Tambahkan tanggal publikasi jika tidak diisi
        $data['tanggal_publikasi'] = $request->input('tanggal_publikasi', now());

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('news-images', 'public');
        }

        // Simpan data ke database
        BeritaPanti::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan.');
    }



    /**
     * Show the form for editing the specified news entry.
     */
    public function edit($id)
    {
        // Cari berita berdasarkan ID
        $news = BeritaPanti::findOrFail($id);

        return view('admin.newsAdmin.edit', compact('news'));
    }

    /**
     * Update the specified news entry in the database.
     */
    public function update(Request $request, $id)
    {
        // Cari berita yang akan diupdate
        $news = BeritaPanti::findOrFail($id);

        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tanggal_publikasi' => 'required|date',
        ]);

        // Ambil semua data input
        $data = $request->all();

        // Cek jika ada file gambar yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($news->gambar) {
                Storage::disk('public')->delete($news->gambar);
            }

            // Simpan gambar baru ke folder storage/app/public/news-images
            $data['gambar'] = $request->file('gambar')->store('news-images', 'public');
        }

        // Update data berita
        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified news entry from the database.
     */
    public function destroy($id)
    {
        // Cari berita yang akan dihapus
        $news = BeritaPanti::findOrFail($id);

        // Hapus gambar jika ada
        if ($news->gambar) {
            Storage::disk('public')->delete($news->gambar);
        }

        // Hapus berita dari database
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus.');
    }
}
