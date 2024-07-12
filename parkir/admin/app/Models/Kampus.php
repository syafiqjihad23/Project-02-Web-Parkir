<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    use HasFactory;

    // Nama tabel model kampus
    protected $table = 'kampuses';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'nama',
        'alamat',
        'latitude',
        'longitude',
    ];
    // disable timestamps
    public $timestamps = false;
}
