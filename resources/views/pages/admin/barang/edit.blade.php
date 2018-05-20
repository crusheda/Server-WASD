@extends('layouts.admin')

@section('breadcrump', 'Edit Barang')

@section('action')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    {!! Form::open(['action' => ['admin\BarangController@update', $barang->id], 'method' => 'PUT']) !!}
                        <div class="form-group">
                            <label class="col-md-12">Id</label>
                            <div class="col-md-12">
                                {{Form::text('id', $barang->id, ['class' => 'form-control form-control-line', 'placeholder' => 'Jenis Barang', 'disabled' => true])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                {{Form::text('nama', $barang->nama, ['class' => 'form-control form-control-line', 'placeholder' => 'Nama Barang'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jenis Barang</label>
                            <div class="col-md-12">
                                {{Form::select('jenis_barang', $jenis_barangs->pluck('nama', 'id'), $barang->id_jenis, ['class' => 'form-control form-control-line', 'placeholder' => 'Jenis Barang'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Harga Satuan</label>
                            <div class="col-md-12">
                                {{Form::text('harga_satuan', $barang->harga_satuan, ['class' => 'form-control form-control-line', 'placeholder' => 'Harga Satuan'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Gambar</label>
                            <div class="col-md-12">
                                {{Form::file('image')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Deskripsi</label>
                            <div class="col-md-12">
                                {{Form::textarea('deskripsi', $barang->deskripsi, ['class' => 'form-control form-control-line', 'placeholder' => 'Deskripsi'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::submit('Update', ['class' => 'btn btn-success'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection