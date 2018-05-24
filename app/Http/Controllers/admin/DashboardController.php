<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Order;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Order::where('ambil', false)->orderBy('id', 'ASC')->get();
        return view('pages.admin.dashboard')->with('orders', $data);
       
    }

    public function logout() {
        //logout admin

        // auth()->logout();
        Auth::logout();
        // redirect to homepage
        return redirect('/');
    }
}
