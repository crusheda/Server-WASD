<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Response;

class OrderController extends Controller
{

    public function index()
    {
        return view('pages.admin.tambahorder');
    }

    //
    public function store (Request $request)
    {
        $data = new Order;
        $data->nama = $request->nama;
        $data->no_hp = intval($request->no_hp);
        $data->deadline = $request->deadline;
        $data->pembayaran = intval($request->pembayaran);
        $data->bahan = false;
        $data->potong = false;
        $data->sablon = false;
        $data->jahit = false;
        $data->press = false;
        $data->finishing = false;
        $data->quality_control = false;
        $data->konfirmasi = false;
        $data->ambil = false;

        $data->save();
        return redirect('/admin');
    }

    public function updateBahan(Request $request)
    {
        $data = Order::find($request->id);
        $data->bahan = $request->value;
        $data->save();
        $this->sendResponse(['bahan' => $data->bahan], 'bahan update successfully');
    }

    public function detail(Request $request)
    {
        $data = Order::find($request->id);        
        if($data->id = intval($request->kodetrack))
        {
            return redirect('/order');
        }
        else {
            return redirect('/');
        }
    }

    // $data = JenisBarang::find($id);
    // $data->nama = $request->nama;

    public function done($id)
    {
        $data = JenisBarang::find($id);
        $data->delete();
        
        return redirect('/admin/jenis_barang');
    }
}
