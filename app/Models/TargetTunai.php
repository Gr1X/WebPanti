<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetTunai extends Model
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
        return $this->hasMany(RelasiTunaiTarget::class, 'id_targettunai');
    }
}

