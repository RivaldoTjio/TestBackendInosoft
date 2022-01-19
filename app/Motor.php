<?php
declare(strict_types=1);
namespace App;

class Motor extends Kendaraan
{
    private $mesin;
    private $tipe_suspensi;
    private $tipe_transmisi;

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
    public function getTipeSuspensi()
    {
        return $this->tipe_suspensi;
    }

    /**
     * @param mixed $tipe_suspensi
     */
    public function setTipeSuspensi($tipe_suspensi): void
    {
        $this->tipe_suspensi = $tipe_suspensi;
    }

    /**
     * @return mixed
     */
    public function getTipeTransmisi()
    {
        return $this->tipe_transmisi;
    }

    /**
     * @param mixed $tipe_transmisi
     */
    public function setTipeTransmisi($tipe_transmisi): void
    {
        $this->tipe_transmisi = $tipe_transmisi;
    }
}
