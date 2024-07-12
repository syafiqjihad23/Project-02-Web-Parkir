<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    // Nama tabel jenid
    protected $table = 'jenis';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'nama',
    ];
    // disable timestamps
    public $timestamps = false;
}
