<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'role',
        'no_telp',
        'password',
    ];

    // Relasi ke donasi tunai
    public function donasiTunai()
    {
        return $this->hasMany(DonasiTunai::class, 'user_id');
    }

    // Relasi ke donasi barang
    public function donasiBarang()
    {
        return $this->hasMany(DonasiBarang::class, 'user_id');
    }
}
