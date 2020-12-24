<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asi extends Model
{
    use HasFactory;
    protected $table = "tabelasi";
    protected $fillable = [
        'pemerlulayanan_id',
        'nama',
        'tanggalmasuk',
        'medis',
        'pekerjaandukungan',
        'napza',
        'keluargasosial',
        'psikiatris',
        'keterangandiagnosis',
        'diagnosislainnya'
    ];
    public $timestamps = false;
}
