<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        // $count = Transaksi::all()->count();
        // $on_progress = Transaksi::where('status_ambil', 'Belum Ambil')->get()->count();
        return view('pages.admin.dashboard');
        // ->with(['count' => $count, 'on_progress' => $on_progress])
    }
}
