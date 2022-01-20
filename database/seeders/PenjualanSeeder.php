<?php

namespace Database\Seeders;

use App\Models\PenjualanModel;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $penjualan = new PenjualanModel();
       $penjualan->jenis = 'Avanza';
       $penjualan->tgl_penjualan = time();
       $penjualan->jumlah_stok_keluar = 1;
       $penjualan->total = 16000000;
    }
}
