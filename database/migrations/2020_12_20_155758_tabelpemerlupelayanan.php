<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelpemerlupelayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabelpemerlupelayanan', function (Blueprint $table) {
            $table->dateTime('tanggalmasuk');
            $table->string('nama');
            $table->integer('nik');
            $table->integer('nomorkk');
            $table->enum('statuspernikahan',['menikah','belummenikah']);
            $table->string('tempatlahir');
            $table->dateTime('tanggallahir');
            $table->string('tempattinggaltetap');
            $table->integer('nomortelepon');
            $table->enum('pendidikanterakhir',['sd','smp','sma','s1']);
            $table->string('namaayah');
            $table->integer('nikayah');
            $table->integer('nomorkkayah');
            $table->integer('tempatlahirayah');
            $table->dateTime('tanggallahirayah');
            $table->string('pekerjaanayah');
            $table->string('namaibu');
            $table->integer('nikibu');
            $table->integer('nomorkkibu');
            $table->integer('tempatlahiribu');
            $table->dateTime('tanggallahiribu');
            $table->string('pekerjaanibu');
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
        Schema::dropIfExists('tabelpemerlupelayanan');
    }
}