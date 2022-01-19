<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Motor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Motor', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_keluaran', 10);
            $table->string('warna', 50);
            $table->integer('harga');
            $table->string('mesin', 100);
            $table->string('tipe_suspensi', 100);
            $table->string('tipe_transmisi', 100);
            $table->integer('stok');
            $table->boolean('deleted');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Motor');
    }
}
