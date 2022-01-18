<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mobil extends \Illuminate\Database\Migrations\Migration
{

    public function up(){
        Schema::create('Mobil', function (Blueprint $table) {
           $table->id();
           $table->string('tahun_keluaran',10);
           $table->string('warna', 50);
           $table->integer('harga');
           $table->string('mesin',100);
           $table->integer('kapasitas');
           $table->string('tipe',100);
           $table->integer('stok');
            $table->boolean('deleted');
        });
    }

    public function down(){
        Schema::dropIfExists('Mobil');
    }
}
