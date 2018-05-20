<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public $primaryKey = "id";
    public $timestamps = false;
}
