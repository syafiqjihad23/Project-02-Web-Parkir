<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaParkir extends Model
{
    use HasFactory;

    protected $table = 'area_parkirs';

    protected $fillable = [
        'nama',
        'kapasitas',
        'keterangan',
        'kampus_id',
    ];

    public function kampus()
    {
        return $this->belongsTo(Kampus::class, 'kampus_id');
    }
}
