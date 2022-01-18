<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penjualan extends Migration
{

    public function up(){
        Schema::create('Penjualan', function (Blueprint $table){
           $table->id();
        });
    }

    public function down(){
        Schema::dropIfExists('Penjualan');
    }
}
