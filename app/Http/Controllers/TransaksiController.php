<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Carbon\Carbon;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $file_name = Carbon::now()->toDateString() . '_' .$request->id_customer . '_' . $request->id_barang . '_' . $request->file('file')->getClientOriginalname();
        $file_url = url('/') . '/img/file/' . $file_name;
        $request->file('file')->move( base_path() . '/public/img/file/', $file_name);
        
        $data = new Transaksi;
        $data->id_customer = intval($request->id_customer);
        $data->id_barang = intval($request->id_barang);
        $data->jumlah = intval($request->jumlah);
        $data->file = $file_url;
        $data->keterangan = $request->keterangan;
        $data->tanggal_pesan = Carbon::now()->toDateTimeString();
        $data->tanggal_jadi = Carbon::now()->addDays(14);
        $data->status_ambil = 'Belum Ambil';
 
        $data->save();

        if($request->id_customer == 1){
            return redirect('admin/laporan');
        }
    }
    
    public function update($id)
    {
        $data = Transaksi::find($id);
        $data->status_ambil = 'Sudah Ambil';
        
        $data->save();

        return redirect('admin/laporan');
    }
}
