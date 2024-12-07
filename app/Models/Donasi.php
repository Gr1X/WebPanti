<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
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

    public function relasiTarget()
    {
        return $this->hasMany(RelasiTarget::class, 'id_donasitunai');
    }
}

