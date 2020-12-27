<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenPsikolog extends Model
{
    use HasFactory;
    protected $table = "tabelasesmenpsikologi";
    protected $fillable = ['id'];
    public $timestamps = false;

}
