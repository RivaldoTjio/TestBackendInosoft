<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class MotorModel extends Eloquent
{
    protected $connection;
    protected $collection = 'Motor';
    protected $fillable = [
        'tahun_keluaran','warna','harga','mesin','tipe_suspensi','tipe_transmisi','stok','deleted'
    ];
    use HasFactory;
}
