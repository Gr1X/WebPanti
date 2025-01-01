<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaPanti extends Model
{
    use HasFactory;

    protected $table = 'berita_program';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'tanggal_publikasi',
    ];
}

