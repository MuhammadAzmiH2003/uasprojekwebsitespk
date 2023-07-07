<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';
    protected $fillable = [
        'nama',
        'harga',
        'gizi',
        'gula',
        'lemak',
        'kadalwarsa',

    ];
}
