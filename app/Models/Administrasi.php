<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "tabeladministrasi";
    protected $fillable = [
        'pemerlulayanan_id',
        'kk',
        'ktp',
        'ktportu',
        'suratpemohonanortu',
        'suratpernyataanortu',
        'suratpernyataanpemerlu',
        'suratperjanjian'
    ];
}
