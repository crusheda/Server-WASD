<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    public $primaryKey = "nomor_transaksi";
    public $timestamps = false;

    public function customer()
    {
        return $this->hasOne('App\Customer', 'id', 'id_customer');
    }

    public function barang()
    {
        return $this->hasOne('App\Barang', 'id', 'id_barang');
    }
}
