<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Penjualan', function (Blueprint $table){
            $table->id();
            $table->string('jenis');
            $table->timestamp('tgl_penjualan');
            $table->integer('jumlah_stok_keluar');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Penjualan');
    }
}
