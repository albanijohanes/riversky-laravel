<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswas";

    use HasFactory;

    protected $fillable = [
        'nama',
        'nim',
        'umur',
        'nohp',
        'tgllahir'
    ];
}
