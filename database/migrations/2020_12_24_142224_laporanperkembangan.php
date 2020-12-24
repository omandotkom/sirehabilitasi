<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laporanperkembangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabellaporanperkembangan', function (Blueprint $table) {
            $table->id();
            $table->enum('bulanlaporan',['1','2','3','4']);
            $table->integer('pemerlulayanan_id');
            $table->date('tanggalmasuk');
            $table->date('tanggalprogram');
            $table->longText('f_masalah');
            $table->longText('f_intervensi');
            $table->longText('f_intervensidicapai');
            $table->longText('f_intervensibelumdicapai');
            $table->longText('p_masalah');
            $table->longText('p_intervensi');
            $table->longText('p_intervensidicapai');
            $table->longText('p_intervensibelumdicapai');
            $table->longText('sos_masalah');
            $table->longText('sos_intervensi');
            $table->longText('sos_intervensidicapai');
            $table->longText('sos_intervensibelumdicapai');
            $table->longText('s_masalah');
            $table->longText('s_intervensi');
            $table->longText('s_intervensidicapai');
            $table->longText('s_intervensibelumdicapai');
            $table->longText('kendala');
            $table->longText('rencana');
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
