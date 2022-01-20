<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Repository\MongoMobilRepository;
use App\Repository\MongoMotorRepository;
use App\Service\MobilService;
use App\Service\MotorService;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    protected $mobilRepository;
    protected $mobilService;
    protected $motorService;
    protected $motorRepository;
    public function __construct()
    {
        $this->mobilRepository = new MongoMobilRepository();
        $this->mobilService = new MobilService($this->mobilRepository);
        $this->motorRepository = new MongoMotorRepository();
        $this->motorService = new MotorService($this->motorRepository);
    }

    public function insert(){
        $mobil = new Mobil();
        $mobil->setTahunKeluaran(2021);
        $mobil->setHarga(100000000);
        $mobil->setWarna("Merah");
        $mobil->setKapasitasPenumpang(6);
        $mobil->setMesin("1300cc");
        $mobil->setTipe("Avanza");
        $this->mobilService->insertMobil($mobil);
    }

    public function readAll(){
        $result = ['status'=>200];
        try {
            $result['mobil'] = $this->mobilService->getAllMobil();
            $result['motor'] = $this->motorService->getAllMotor();
        } catch (\Exception $exception){
            $result = [
                'status' => 500,
                'error' => $exception->getMessage()
            ];
        }
        return response()->json($result, $result['status']);
    }
}
