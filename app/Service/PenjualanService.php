<?php

namespace App\Service;

class PenjualanService
{
    protected $penjualanRepository;

    /**
     * @param $penjualanRepository
     */
    public function __construct($penjualanRepository)
    {
        $this->penjualanRepository = $penjualanRepository;
    }
}
