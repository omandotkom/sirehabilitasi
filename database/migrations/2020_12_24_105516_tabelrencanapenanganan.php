<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelrencanapenanganan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelrencanapelayanan', function (Blueprint $table) {
            $table->id();
            $table->integer('pemerlulayanan_id');
            $table->date('tanggalmasuk');
            $table->date('tanggalprogram');
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

            $table->text('genomap');
            $table->text('fokus');
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
    }
}
