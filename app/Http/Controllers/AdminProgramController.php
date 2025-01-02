<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Target; // Model untuk tabel target
use App\Models\Donasi; // Model untuk tabel donasi
use Illuminate\Support\Facades\Storage;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the programs.
     */
    
    public function dashboard(){
        // Ambil data yang diperlukan untuk dashboard
        $programs = Target::withSum('donasi', 'jumlah')->get(); // Ambil data program dan jumlah donasi
        $programCount = Target::count(); 
        // Kirimkan data ke view
        return view('admin.programs.dashboard', compact('programs', 'programCount'));
    }

        public function index(Request $request)
    {
        // Ambil input pencarian
        $search = $request->query('search');

        // Hitung total program
        $programCount = Target::count();

        // Query program dengan filter pencarian
        $programsQuery = Target::withSum('donasi', 'jumlah');

        if ($search) {
            $programsQuery = $programsQuery->where(function ($query) use ($search) {
                $query->where('namaprogram', 'LIKE', "%{$search}%")
                    ->orWhere('deskripsi', 'LIKE', "%{$search}%");
            });
        }

        $programs = $programsQuery->get();

        // Hitung status untuk setiap program
        $programs = $programs->map(function ($program) {
            $program->status = $program->donasi_sum_jumlah >= $program->jumlah_target ? 'complete' : 'ongoing';
            return $program;
        });

        // Hitung jumlah program berdasarkan status
        $completedCount = $programs->where('status', 'complete')->count();
        $ongoingCount = $programs->where('status', 'ongoing')->count();

        return view('admin.programs.index', compact('programs', 'programCount', 'completedCount', 'ongoingCount'));
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
