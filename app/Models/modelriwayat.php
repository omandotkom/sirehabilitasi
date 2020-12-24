<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelriwayat extends Model
{
    use HasFactory;
    protected $table="tabelriwayat";
    public $timestamps = false;
    public function pemerlu(){
        return $this->hasOne(modelpemerlupelayanan::class, 'id', 'pemerlulayanan_id');
    }
    protected $fillable = [
        'pemerlulayanan_id',
        'nama',
        'sd',
        'smp',
        'sma',
        'kuliah',
        'pendidikannonformal',
        'namalembaga',
        'jenispelayanan',
        'hasil'
    ];
}
