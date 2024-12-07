<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaprogram',
        'deskripsi',
        'jumlah_target',
        'terkumpul',
        'tgl_mulai',
        'tgl_selesai',
    ];

    public function relasiTargetTunai()
    {
        return $this->hasMany(RelasiTarget::class, 'id_targettunai');
    }
}

