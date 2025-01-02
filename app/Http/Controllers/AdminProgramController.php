<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Target; // Model untuk tabel target
use App\Models\Donasi; // Model untuk tabel donasi
use App\Models\Payment;
use Illuminate\Support\Facades\Storage;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the programs.
     */

    public function dashboard(){
        // Ambil data yang diperlukan untuk dashboard
        $historyDonasi = Donasi::orderBy('waktu_donasi', 'desc')->take(3)->get();
        $totalUser = User::where('role', 'user')->count();
        $totalDonasi = Donasi::sum('jumlah'); 
        $programs = Target::withSum('donasi', 'jumlah')->get(); // Ambil data program dan jumlah donasi
        $programCount = Target::count(); 
        // Kirimkan data ke view
        return view('admin.programs.dashboard', compact('programs', 'programCount', 'totalDonasi', 'totalUser', 'historyDonasi'));
    }

    public function index(Request $request)
    {
        // Ambil input pencarian dan filter
        $search = $request->query('search');
        $statusFilter = $request->query('status');

        // Hitung total program
        $programCount = Target::count();

        // Query program dengan pencarian dan filter status
        $programsQuery = Target::withSum('donasi', 'jumlah');

        if ($search) {
            $programsQuery->where('namaprogram', 'LIKE', "%{$search}%");
        }

        $programs = $programsQuery->get();

        // Hitung status untuk setiap program
        $today = now();
        $programs = $programs->map(function ($program) use ($today) {
            if ($program->donasi_sum_jumlah >= $program->jumlah_target) {
                $program->status = 'complete';
            } elseif ($today->lt($program->tgl_mulai) || ($program->tgl_selesai && $today->gt($program->tgl_selesai))) {
                $program->status = 'closed';
            } else {
                $program->status = 'ongoing';
            }
            return $program;
        });

        // Terapkan filter status jika ada
        if ($statusFilter) {
            $programs = $programs->where('status', $statusFilter);
        }

        // Hitung jumlah program berdasarkan status
        $completedCount = $programs->where('status', 'complete')->count();
        $ongoingCount = $programs->where('status', 'ongoing')->count();
        $closedCount = $programs->where('status', 'closed')->count();

        return view('admin.programs.index', compact('programs', 'programCount', 'completedCount', 'ongoingCount', 'closedCount'));
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
