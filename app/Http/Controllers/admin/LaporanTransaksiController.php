<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;

class LaporanTransaksiController extends Controller
{
    public function index()
    {
        $data = Transaksi::with(['customer', 'barang'])->orderBy('nomor_transaksi', 'DESC')->get();
        return view('pages.admin.transaksi')->with('data', $data);
    }
}
