@extends('layouts.admin')

@section('breadcrump', 'Buat Jenis Barang')

@section('action')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    {!! Form::open(['action' => 'admin\JenisBarangController@store', 'method' => 'POST']) !!}
                        <div class="form-group">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                {{Form::text('nama', '', ['class' => 'form-control form-control-line', 'placeholder' => 'Jenis Barang'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::submit('Create', ['class' => 'btn btn-success'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection