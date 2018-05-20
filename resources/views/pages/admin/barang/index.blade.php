@extends('layouts.admin')

@section('breadcrump', 'Barang')

@section('action')
    <a href="/admin/barang/create" class="btn pull-right hidden-sm-down btn-success">Create New</a>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">Data Barang</h4>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Harga Satuan</th>
                      <th>Gambar</th>
                      <th>Jenis Barang</th>
                      <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($barangs) > 0)
                        @php ($no = 0)
                        @foreach($barangs as $barang)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $barang->nama }}</td>
                                <td width=40%>{{ $barang->deskripsi }}</td>
                                <td>{{ $barang->harga_satuan }}</td>
                                <td><img src="{{ $barang->gambar }}" style="height: 50px" /></td>
                                <td>{{ $barang->jenisbarang->nama }}</td>
                                <td>
                                    <a href="/admin/barang/{{ $barang->id }}/edit" class="btn btn-success">Edit</a>
                                    {!! Form::open(['action' => ['admin\BarangController@destroy', $barang->id], 'method' => 'DELETE', 'style' => 'display: inline']) !!}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-success']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan=3>Tidak Ada Data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection