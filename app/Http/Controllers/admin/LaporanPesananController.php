<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;

class LaporanPesananController extends Controller
{
    public function index()
    {
        $data = Transaksi::with(['customer', 'barang'])->where('status_ambil', 'Belum Ambil')->orderBy('nomor_transaksi', 'DESC')->get();
        return view('pages.admin.pesanan')->with('data', $data);
    }
}
