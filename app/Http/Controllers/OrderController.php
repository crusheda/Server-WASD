<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Response;
use Input;

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
        $data->keterangan = $request->keterangan;
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
        return response()->json(['status' => true, 'bahan' => $data->id, 'message' => 'Status bahan updated ' . $data->bahan]);
    }

    public function updatePotong(Request $request)
    {
        $data = Order::find($request->id);
        $data->potong = $request->value;
        $data->save();
        return response()->json(['status' => true, 'potong' => $data->id, 'message' => 'Status potong updated ' . $data->potong]);
    }

    public function updateSablon(Request $request)
    {
        $data = Order::find($request->id);
        $data->sablon = $request->value;
        $data->save();
        return response()->json(['status' => true, 'sablon' => $data->id, 'message' => 'Status sablon updated ' . $data->sablon]);
    }

    public function updateJahit(Request $request)
    {
        $data = Order::find($request->id);
        $data->jahit = $request->value;
        $data->save();
        return response()->json(['status' => true, 'jahit' => $data->id, 'message' => 'Status jahit updated ' . $data->jahit]);
    }

    public function updatePress(Request $request)
    {
        $data = Order::find($request->id);
        $data->press = $request->value;
        $data->save();
        return response()->json(['status' => true, 'press' => $data->id, 'message' => 'Status press updated ' . $data->press]);
    }

    public function updateFinish(Request $request)
    {
        $data = Order::find($request->id);
        $data->finishing = $request->value;
        $data->save();
        return response()->json(['status' => true, 'finishing' => $data->id, 'message' => 'Status finishing updated ' . $data->finishing]);
    }

    public function updateQc(Request $request)
    {
        $data = Order::find($request->id);
        $data->quality_control = $request->value;
        $data->save(); 
        return response()->json(['status' => true, 'quality_control' => $data->id, 'message' => 'Status quality_control updated ' . $data->quality_control]);
    }

    public function updateKonfirmasi(Request $request)
    {
        $data = Order::find($request->id);
        $data->konfirmasi = $request->value;
        $data->save();
        return response()->json(['status' => true, 'konfirmasi' => $data->id, 'message' => 'Status konfirmasi updated ' . $data->konfirmasi]);
    }

    //COBA
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

    public function done(Request $request)
    {
        $data = Order::find($request->id);
        $data->ambil = true;

        $data->save();
        
        return redirect('/admin');
    }

    public function track(Request $request)
    {
        // $input = $request->input('kodetrack');
        // $data->id = intval($input);
		// $name = \App\Order::where('id', 'LIKE', '%'.$input.'%')->get();
        // return view('tampilorder', compact('name'));
        $data = Order::find($request->kodetrack);
        $result = ['data' => $data];
        return view('pages.user.order', $result);
    }
}