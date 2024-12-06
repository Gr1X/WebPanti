<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'no_telp',
    ];

    protected $hidden = [
        'password',
        'remember_token',
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
