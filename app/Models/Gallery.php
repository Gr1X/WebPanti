<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
        'gambar',
        'tgl_gallery',
    ];

    // Accessor untuk mendapatkan tahun dari tgl_gallery
    public function getYearAttribute()
    {
        return date('Y', strtotime($this->tgl_gallery));
    }
}
