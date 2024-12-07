<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $table = 'target'; // Nama tabel di database

    protected $fillable = [
        'namaprogram',
        'deskripsi',
        'jumlah_target',
        'terkumpul',
        'gambar',
        'tgl_mulai',
        'tgl_selesai',
    ];
}
