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
        'gambar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relasi ke donasi tunai
    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'user_id');
    }
}
