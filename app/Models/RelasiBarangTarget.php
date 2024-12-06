<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelasiBarangTarget extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_donasibarang',
        'id_programbarang',
    ];

    public function donasiBarang()
    {
        return $this->belongsTo(DonasiBarang::class, 'id_donasibarang');
    }

    public function targetBarang()
    {
        return $this->belongsTo(TargetBarang::class, 'id_programbarang');
    }
}
