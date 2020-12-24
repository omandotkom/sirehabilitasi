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
            $table->id();
            $table->date('tanggalmasuk');
            $table->string('nama');
            $table->string('nik');
            $table->string('nomorkk');
            $table->enum('statuspernikahan',['menikah','belummenikah']);
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('tempattinggaltetap');
            $table->string('nomortelepon');
            $table->enum('pendidikanterakhir',['sd','smp','sma','s1']);
            $table->string('namaayah');
            $table->string('nikayah');
            $table->string('nomorkkayah');
            $table->string('tempatlahirayah');
            $table->date('tanggallahirayah');
            $table->string('pekerjaanayah');
            $table->string('namaibu');
            $table->string('nikibu');
            $table->string('nomorkkibu');
            $table->string('tempatlahiribu');
            $table->date('tanggallahiribu');
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