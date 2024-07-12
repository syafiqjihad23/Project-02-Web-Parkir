<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';

    protected $fillable = [
        'tanggal',
        'mulai',
        'akhir',
        'keterangan',
        'biaya',
        'kendaraan_id',
        'area_parkir_id',
    ];

    // Relasi model kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    // Relasi model area parkir
    public function areaParkir()
    {
        return $this->belongsTo(AreaParkir::class, 'area_parkir_id');
    }

    
    // disable timestamps
    public $timestamps = false;
}
