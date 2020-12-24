<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelpemerlupelayanan extends Model
{
    use HasFactory;
    protected $table = "tabelpemerlupelayanan";
    public $timestamps = false;
    protected $fillable = [
        'tanggalmasuk',
        'nama',
        'nik',
        'nomorkk',
        'statuspernikahan',
        'tempatlahir',
        'tempattingaltetap',
        'nomortelepon',
        'pendidikanterakhir',
        'namayaah',
        'nikayah',
        'nomorkkayah',
        'tempatlahirayah',
        'tanggallahirayah',
        'pekerjaanayah',
        'namaibu',
        'nomorkkibu',
        'tempatlahiribu',
        'tanggallahiribu',
        'pekerjaanibu'
    ];
    public function riwayat(){
        return $this->hasOne(modelriwayat::class, 'pemerlulayanan_id', 'id');
    }
}
