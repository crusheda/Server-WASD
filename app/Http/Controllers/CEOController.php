<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\order;

class CEOController extends Controller
{
    //
    public function index()
    {
        $show = order::all();
        $total = order::count();
        $bahan = order::where( 'bahan', true)->count();
        $potong = order::where( 'potong', true)->count();
        $sablon = order::where( 'sablon', true)->count();
        $jahit = order::where( 'jahit', true)->count();
        $press = order::where( 'press', true)->count();
        $finishing = order::where( 'finishing', true)->count();
        $qc = order::where( 'quality_control', true)->count();
        $konfirmasi = order::where( 'konfirmasi', true)->count();

        $data = [
            'bahan' => $bahan,
            'potong' => $potong,
            'sablon' => $sablon,
            'jahit' => $jahit,
            'press' => $press,
            'finishing' => $finishing,
            'qc' => $qc,
            'konfirmasi' => $konfirmasi,
            'total' => $total,
            'show' => $show
        ];
        return view('ceo.ceo')->with('order', $data);
    }
    public function getid($id_order)
    {
        # code...
        $data = order::find($id_order);
        return view('ceo.detail')->with('order' ,$data);
    }
}
