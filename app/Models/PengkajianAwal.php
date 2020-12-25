<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengkajianAwal extends Model
{
    use HasFactory;
    protected $table = "tabelpengkajianawal";
    protected $guard = ['id'];
    public $timestamps = false;
}
