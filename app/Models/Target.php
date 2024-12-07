<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit
    protected $table = 'target';

    protected $fillable = [
        'namaprogram',
        'deskripsi',
        'jumlah_target',
        'gambar',
        'tgl_mulai',
        'tgl_selesai',
    ];

    // Relasi dengan Donasi
    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'program_id'); // Menyesuaikan dengan kolom program_id di tabel donasi
    }
}
