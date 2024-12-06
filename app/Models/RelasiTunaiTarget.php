<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiTunaiTarget extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_donasitunai',
        'id_targettunai',
    ];

    public function donasiTunai()
    {
        return $this->belongsTo(DonasiTunai::class, 'id_donasitunai');
    }

    public function targetTunai()
    {
        return $this->belongsTo(TargetTunai::class, 'id_targettunai');
    }
}
