<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'jenis_kelamin',
        'no_telp',
        'nip',
        'nwnp',
        'alamat',
        'photos',
    ];
}
