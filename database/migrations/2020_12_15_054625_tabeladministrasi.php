<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabeladministrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabeladministrasi', function (Blueprint $table) {
            $table->string('nama');
            $table->string('kk');
            $table->string('ktp');
            $table->string('ktportu');
            $table->string('suratpemohonanortu');
            $table->string('suratpernyataanortu');
            $table->string('suratpernyataanpemerlu');
            $table->string('suratperjanjian');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tabeladministrasi');
    }
}
