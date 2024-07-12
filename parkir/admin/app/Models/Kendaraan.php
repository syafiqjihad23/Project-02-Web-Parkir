<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    // Nama tabel kendaraan
    protected $table = 'kendaraans';

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'merk',
        'pemilik',
        'nopol',
        'tahun_beli',
        'deskripsi',
        'jenis_kendaraan_id',
        'kapasitas_id',
        'rating',
    ];

    // Relasi dengan model Jenis
    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_kendaraan_id');
    }
    // Relasi kapasitas pada model Kendaraan
    public function kapasitas()
    {
        return $this->belongsTo(AreaParkir::class, 'kapasitas_id');
    }

    // disable timestamps
    public $timestamps = false;
}
