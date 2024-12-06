<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonasiTunai extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jumlah',
        'notes',
        'waktu_donasi',
    ];

    // Relasi ke user yang memberikan donasi
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function relasiTargetTunai()
    {
        return $this->hasMany(RelasiTunaiTarget::class, 'id_donasitunai');
    }
}

