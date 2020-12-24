<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoqol extends Model
{
    use HasFactory;
    protected $table = "tabelwhoqol";
    public $timestamps = false;
    protected $fillable = [
        'pemerlulayanan_id',
        'tanggalwawancara_id',
        'domain1',
        'domain2',
        'domain3',
        'domain4'
    ];
}
