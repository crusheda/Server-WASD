<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class DetailController extends Controller
{
    //
    public function index()
    {
        $data = Order::where('ambil', false)->orderBy('id', 'ASC')->get();
        return view('pages.admin.detail')->with('orders', $data);       
    }
}
