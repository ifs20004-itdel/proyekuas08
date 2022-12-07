<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBeasiswa extends Model
{
    // use HasFactory;
    protected $table = 'data_beasiswa';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama', 'nim','id_prodi', 'angkatan', 'beasiswa', 'tahun', 'status', 'tahunTerima', 'created_at', 'updated_at'
    ];
}
