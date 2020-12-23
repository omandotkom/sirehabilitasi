<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelrencanapelayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabelrencanapelayanan', function (Blueprint $table) {
            
            $table->string('nama');
            $table->dateTime('tanggalmasuk');
            $table->dateTime('tanggalprogram');
          /*  $table->('genomap'); */
            
            $table->longText('riwayatkeluarga');
            $table->longText('riwayatsekolah');
            $table->longText('riwayatnapza');
            $table->longText('aspekkesehatan');
            $table->longText('aspeksosial');
            $table->longText('aspekpsikologis');
            $table->longText('aspekmentalspiritual');
            $table->longText('potensiinternal');
            $table->longText('potensieksternal');
            $table->longText('faktorgenetik');
            $table->longText('faktorpersonal');
            $table->longText('faktorlingkungan');
            $table->longText('permasalahankeluarga');
            $table->longText('rumusanmasalah');
            $table->longText('waktulayanan');
          /*  $table->('fokuspenanganan'); */


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
        Schema::dropIfExists('tabelrencanapelayanan');
    }
}