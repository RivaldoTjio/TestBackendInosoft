<?php

namespace Database\Seeders;

use App\Models\MotorModel;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Type\Integer;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor = new MotorModel();
        $motor->tahun_keluaran = '2021';
        $motor->warna = 'Merah';
        $motor->harga = 16000000;
        $motor->mesin = '125cc';
        $motor->tipe_suspensi = 'Telescopic Fork';
        $motor->tipe_transmisi = 'Matic';
        $motor->save();
    }
}
