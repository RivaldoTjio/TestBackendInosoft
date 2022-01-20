<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PenjualanModel extends Eloquent
{
    protected $connection;
    protected $collection = 'Penjualan';
    protected $fillable = [
        'jenis','tgl_penjualan','jumlah_stok_kelua','total'
    ];
    use HasFactory;
}
