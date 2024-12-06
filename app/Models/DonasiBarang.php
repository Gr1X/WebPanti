<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonasiBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_barang',
        'jumlah',
        'notes',
        'waktu_donasi',
    ];

    // Relasi ke user yang memberikan donasi
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function relasiTargetBarang()
    {
        return $this->hasMany(RelasiBarangTarget::class, 'id_donasibarang');
    }
}

