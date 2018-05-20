@extends('layouts.admin')

@section('breadcrump', 'Laporan')

@section('action')
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">Laporan</h4>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pemesan</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                      <th>Tanggal Pesan</th>
                      <th>Tanggal Jadi</th>
                      <th>Status Ambil</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($data) > 0)
                        @php ($no = 0)
                        @foreach($data as $value)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $value->customer->nama }}</td>
                                <td>{{ $value->barang->nama }}</td>
                                <td>{{ $value->jumlah }}</td>
                                <td>{{ $value->keterangan }}</td>
                                <td>{{ $value->tanggal_pesan }}</td>
                                <td>{{ $value->tanggal_jadi }}</td>
                                <td>{{ $value->status_ambil }}</td>
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