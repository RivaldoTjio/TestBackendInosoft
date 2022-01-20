<?php

namespace App\Repository;

use App\Mobil;
use App\Models\MobilModel;

class MongoMobilRepository implements RepositoryInterface
{
    protected $mobilModel;

    public function __construct()
    {
        $this->mobilModel = new MobilModel();
    }


    public function insert($model)
    {
        $this->mobilModel->tahun_keluaran = $model->getTahunKeluaran();
       $this->mobilModel->warna = $model->getWarna();
       $this->mobilModel->harga = $model->getHarga();
       $this->mobilModel->mesin = $model->getMesin();
       $this->mobilModel->kapasitas = $model->getKapasitasPenumpang();
       $this->mobilModel->tipe = $model->getTipe();
       $this->mobilModel->stok = 10;
       $this->mobilModel->deleted = false;
       $this->mobilModel->save();
        return $this->mobilModel->fresh();
    }

    public function read($id)
    {

    }

    public function readAll()
    {
        return $this->mobilModel->get();
    }

    public function update($model)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
