<?php
declare(strict_types=1);
namespace App;

abstract class Kendaraan
{
    private $tahun_keluaran;
    private $warna;

    /**
     * @return mixed
     */
    public function getTahunKeluaran()
    {
        return $this->tahun_keluaran;
    }

    /**
     * @param mixed $tahun_keluaran
     */
    public function setTahunKeluaran($tahun_keluaran): void
    {
        $this->tahun_keluaran = $tahun_keluaran;
    }

    /**
     * @return mixed
     */
    public function getWarna()
    {
        return $this->warna;
    }

    /**
     * @param mixed $warna
     */
    public function setWarna($warna): void
    {
        $this->warna = $warna;
    }

    /**
     * @return mixed
     */
    public function getHarga()
    {
        return $this->harga;
    }

    /**
     * @param mixed $harga
     */
    public function setHarga($harga): void
    {
        $this->harga = $harga;
    }
    private $harga;
}
