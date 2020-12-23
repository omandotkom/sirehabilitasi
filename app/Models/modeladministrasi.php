<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeladministrasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tabeladministrasi';
    protected $fillable = ['nik','ktp','ktportu','suratpemohonanortu','suratpernyataanpemerlu','suratperjanjian'];
}
