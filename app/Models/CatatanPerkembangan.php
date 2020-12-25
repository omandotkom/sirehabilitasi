<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanPerkembangan extends Model
{
    use HasFactory;
    protected $table = "tabelcatatanperkembangan";
    protected $guard = ['id'];
    public $timestamps = false;
}
