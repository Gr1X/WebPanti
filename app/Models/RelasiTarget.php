<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiTarget extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_donasi',
        'id_target',
    ];

    public function donasiTunai()
    {
        return $this->belongsTo(Donasi::class, 'id_donasi');
    }

    public function targetTunai()
    {
        return $this->belongsTo(Target::class, 'id_target');
    }
}
