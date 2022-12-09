<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BeasiswaEksternal;

class BeasiswaEksternal extends Model
{
    use HasFactory;

    protected $table = 'beasiswa_eksternal';
    protected $primarykey = 'id';

}
