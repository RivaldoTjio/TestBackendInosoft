<?php

namespace Database\Seeders;

use App\Models\MobilModel;
use Illuminate\Database\Seeder;


class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor = new MobilModel();
        $motor->tahun_keluaran = '2021';
        $motor->warna = 'Merah';
        $motor->harga = 16000000;
        $motor->mesin = '125cc';
        $motor->kapasitas_penumpang = 6;
        $motor->tipe = 'Ertiga';
        $motor->save();
    }
}
