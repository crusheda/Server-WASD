<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class DownloadController extends Controller
{
    public function index($transaksi)
    {
        $data = Transaksi::find($transaksi);
        return \Redirect::to($data->file);
    }
}
