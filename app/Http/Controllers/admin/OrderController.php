<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;

class OrderController extends Controller
{
    public function index()
    {
        // $data = Barang::with(['jenisbarang'])->orderBy('id', 'ASC')->get();
        return view('pages.admin.tambahorder');
        // ->with('barangs', $data)
    }
}
