@extends('layouts.admin')

@section('breadcrump', 'Order')

@section('action')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    {!! Form::open
                        (
                            {{-- ['action' => 'TransaksiController@store', 'method' => 'POST' => true] --}}
                        ) !!}
                    <div class="form-group">
                        <label>Nama Pemesan</label>
                        <input type="text" class="form-control" id="" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>No.HP</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label>Dateline</label>
                        <input type="date" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <center><button type="submit" class="btn btn-primary">Tambahkan</button></center>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection