<?php

namespace App\Service;

use App\Mobil;

class MobilService
{
    protected $mobilRepository;

    /**
     * @param $mobilRepository
     */
    public function __construct($mobilRepository)
    {
        $this->mobilRepository = $mobilRepository;
    }

    public function getAllMobil(){
        return $this->mobilRepository->readAll();
    }

    public function insertMobil(Mobil $mobil){
        $this->mobilRepository->insert($mobil);
    }

}
