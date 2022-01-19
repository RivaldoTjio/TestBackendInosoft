<?php
declare(strict_types=1);
namespace App;

class Mobil extends Kendaraan
{
    private $mesin;
    private $kapasitas_penumpang;

    /**
     * @return mixed
     */
    public function getMesin()
    {
        return $this->mesin;
    }

    /**
     * @param mixed $mesin
     */
    public function setMesin($mesin): void
    {
        $this->mesin = $mesin;
    }

    /**
     * @return mixed
     */
    public function getKapasitasPenumpang()
    {
        return $this->kapasitas_penumpang;
    }

    /**
     * @param mixed $kapasitas_penumpang
     */
    public function setKapasitasPenumpang($kapasitas_penumpang): void
    {
        $this->kapasitas_penumpang = $kapasitas_penumpang;
    }

    /**
     * @return mixed
     */
    public function getTipe()
    {
        return $this->tipe;
    }

    /**
     * @param mixed $tipe
     */
    public function setTipe($tipe): void
    {
        $this->tipe = $tipe;
    }
    private $tipe;
}
