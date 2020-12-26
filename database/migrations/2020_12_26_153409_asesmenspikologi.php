<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asesmenspikologi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelasesmenpsikologi', function (Blueprint $table) {
            $table->id();
            $table->integer('pemerlulayanan_id');
            $table->date('tanggalasesmen');
            $table->text('pengalaman');
            $table->text('riwayatnapza');
            $table->text('penyebabnapza');
            $table->json('pencurian');
            $table->json('perampokan');
            $table->json('tawuran');
            $table->json('seksbebas');
            $table->json('napza');
            $table->json('miras');
            $table->json('menjualnapza');
            $table->json('penjara');
            $table->text('percobaanbunuhdiri');
            $table->text('riwayatpemeriksaanpsikiater');
            $table->text('hubunganppks');
            $table->text('potensiyangdimiliki');
            $table->text('kesiapanrehabilitasi');
            $table->text('bai');
            $table->text('bdi');
            $table->text('staxi');
            $table->text('tesgrafis');
            $table->text('srq');
            $table->text('skalawellbeing');
            $table->text('intelegensi');
            $table->text('rumusanmasalah');
            $table->text('kesimpulan');
            $table->text('rencanaintervensi');
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
