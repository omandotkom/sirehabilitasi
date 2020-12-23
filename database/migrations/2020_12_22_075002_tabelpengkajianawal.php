<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelpengkajianawal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabelpengkajianawal', function (Blueprint $table) {
            
           
            $table->string('nama');
            $table->dateTime('tanggalmasuk');
            $table->dateTime('tanggaltes');
            $table->string('hasiltes');
            $table->enum('riwayatnapza',['rekreasional','situasional','intensif/reguler','komplusif']);
            $table->longText('gejalaputuszat');
            $table->integer('tinggibadan');
            $table->string('luka');
            $table->enum('tattotubuh',['ya','tidak']);
            $table->longText('riwayatpenyakit');
            $table->dateTime('tanggalteslab');
            $table->string('hiv');
            $table->string('darahrutin');
           




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
        Schema::dropIfExists('tabelpengkaianawal');
    }
}
