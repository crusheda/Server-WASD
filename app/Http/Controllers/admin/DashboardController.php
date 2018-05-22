<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Order::orderBy('id', 'ASC')->get();
        // return view('pages.admin.dashboard');
        return view('pages.admin.dashboard')->with('orders', $data);
       
    }
}
