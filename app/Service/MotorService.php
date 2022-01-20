<?php

namespace App\Service;

class MotorService
{
    protected $motorRepository;

    /**
     * @param $motorRepository
     */
    public function __construct($motorRepository)
    {
        $this->motorRepository = $motorRepository;
    }

    public function getAllMotor(){
     return $this->motorRepository->readAll();
    }
}
