<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    public $primaryKey = "id";
    public $timestamps = false;

    public function jenisbarang()
    {
        return $this->hasOne('App\JenisBarang', 'id', 'id_jenis');
    }
}
