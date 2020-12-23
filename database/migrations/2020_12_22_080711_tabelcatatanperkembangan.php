<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelcatatanperkembangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabelcatatanperkembangan', function (Blueprint $table) {
            
           
            $table->string('nama');
            $table->enum('bulan',['1','2','3','4']);
            $table->dateTime('tanggalpemeriksaan');
                       
            $table->integer('beratbadan');
            $table->enum('tandavital',['stabil','tidakstabil']);
            $table->longText('masalahkesehatan');
            $table->longText('rekomendasi');
            $table->longText('rujukan');
            
           




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
        Schema::dropIfExists('tabelcatatanperkembangan');
    }
}