<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $cast = [
        'pembayaran' => 'integer'
    ];
}
