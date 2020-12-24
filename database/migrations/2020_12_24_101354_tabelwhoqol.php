<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tabelwhoqol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabelwhoqol', function (Blueprint $table) {
            $table->id();
            $table->integer('pemerlulayanan_id');
            $table->date('tanggalwawancara');
            $table->json('domain1');
            $table->json('domain2');
            $table->json('domain3');
            $table->json('domain4');
            
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
