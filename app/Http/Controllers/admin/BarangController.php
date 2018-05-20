<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Barang;
use App\JenisBarang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::with(['jenisbarang'])->orderBy('id', 'ASC')->get();
        return view('pages.admin.barang.index')->with('barangs', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = JenisBarang::all();
        return view('pages.admin.barang.create')->with('jenis_barangs', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name = $request->file('image')->getClientOriginalname();
        $img_url = url('/') . '/img/barang/' . $image_name;
        $request->file('image')->move( base_path() . '/public/img/barang/', $image_name);
        
        $data = new Barang;
        $data->nama = $request->nama;
        $data->id_jenis = intval($request->jenis_barang);
        $data->harga_satuan = intval($request->harga_satuan);
        $data->gambar = $img_url;
        $data->deskripsi = $request->deskripsi;
 
        $data->save();
        return redirect('/admin/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::find($id);
        $jenis_barang = JenisBarang::all();
        return view('pages.admin.barang.edit')->with(['barang' => $data, 'jenis_barangs' => $jenis_barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->getClientOriginalname();
            $img_url = url('/') . '/img/barang/' . $image_name;
            $request->file('image')->move( base_path() . '/public/img/barang/', $image_name);
        }
        
        $data = Barang::find($id);
        $data->nama = $request->nama;
        $data->id_jenis = intval($request->jenis_barang);
        $data->harga_satuan = intval($request->harga_satuan);
        if($request->file('image')){
            $data->gambar = $img_url;
        }
        $data->deskripsi = $request->deskripsi;
 
        $data->save();
        return redirect('/admin/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = barang::find($id);
        $data->delete();
        
        return redirect('/admin/barang');
    }
}
