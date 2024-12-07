<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiTarget extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_donasitunai',
        'id_targettunai',
    ];

    public function donasiTunai()
    {
        return $this->belongsTo(Donasi::class, 'id_donasitunai');
    }

    public function targetTunai()
    {
        return $this->belongsTo(Target::class, 'id_targettunai');
    }
}
