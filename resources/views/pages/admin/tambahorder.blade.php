@extends('layouts.admin')

@section('breadcrump', 'Order')

@section('action')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                {!! Form::open(['action' => 'OrderController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        <label>Nama Pemesan</label>
                        {{-- <input type="text" class="form-control" id="" placeholder="Nama Lengkap"> --}}
                        {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama Lengkap'])}}
                    </div>
                    <div class="form-group">
                        <label>No.HP</label>
                        {{-- <input type="text" class="form-control" id=""> --}}
                        {{Form::text('no_hp', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        <label>Dateline</label>
                        {{-- <input type="date" class="form-control" id=""> --}}
                        {{Form::date('deadline', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        <label>Pembayaran</label>
                        {{-- <input type="text" class="form-control" id=""> --}}
                        {{Form::text('pembayaran', '', ['class' => 'form-control', 'placeholder' => ''])}}
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        {{-- <textarea class="form-control" rows="3"></textarea> --}}
                        {{-- {{Form::textarea('deskripsi', '', ['class' => 'form-control', 'placeholder' => '','rows' => '3'])}} --}}
                    </div>
                    <center>{{Form::submit('submit', ['class' => 'btn btn-info'])}}</center>                    
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection