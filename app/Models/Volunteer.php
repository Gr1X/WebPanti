<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'volunteer';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'alamat',
    ];
}
