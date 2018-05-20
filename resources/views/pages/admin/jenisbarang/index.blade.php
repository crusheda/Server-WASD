@extends('layouts.admin')

@section('breadcrump', 'Jenis barang')

@section('action')
    <a href="/admin/jenis_barang/create" class="btn pull-right hidden-sm-down btn-success">Create New</a>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">Data Jenis Barang</h4>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($jenisbarangs) > 0)
                        @php ($no = 0)
                        @foreach($jenisbarangs as $jenisbarang)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $jenisbarang->nama }}</td>
                                <td>
                                    <a href="/admin/jenis_barang/{{ $jenisbarang->id }}/edit" class="btn btn-success">Edit</a>
                                    {!! Form::open(['action' => ['admin\JenisBarangController@destroy', $jenisbarang->id], 'method' => 'DELETE', 'style' => 'display: inline']) !!}
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