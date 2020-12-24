<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelasi', function (Blueprint $table) {
            $table->id();
            $table->integer('pemerlulayanan_id');
            $table->string('nama')->nullable();
            $table->date('tanggalmasuk');
            $table->json('medis');
            $table->json('pekerjaandukungan');
            $table->json('napza');
            $table->json('keluargasosial');
            $table->json('psikiatris');
            $table->text('keterangandiagnosis');
            $table->text('diagnosislainnya');
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
