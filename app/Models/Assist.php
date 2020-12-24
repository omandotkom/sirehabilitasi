<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assist extends Model
{
    use HasFactory;
    protected $table = "tabelassist";
    public $timestamps = false;
    protected $fillable = [
        'pemerlulayanan_id',
        'tanggalpemeriksaan',
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
    ];
}
