<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelriwayat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabelriwayat', function (Blueprint $table) {
            $table->id();
            $table->integer('pemerlulayanan_id');
            $table->string('nama');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('kuliah');
            $table->string('pendidikannonformal');
            $table->string('namalembaga');
            $table->string('jenispelayanan');
            $table->string('hasil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('tabelriwayat');
    }
}
