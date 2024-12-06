<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'namabarang',
        'deskripsi',
        'jumlah_target',
        'terkumpul',
        'tgl_mulai',
        'tgl_selesai',
    ];

    public function relasiTargetBarang()
    {
        return $this->hasMany(RelasiBarangTarget::class, 'id_programbarang');
    }
}
