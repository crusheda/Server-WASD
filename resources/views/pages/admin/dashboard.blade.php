@extends('layouts.admin')

@section('breadcrump', 'Dashboard')

@section('action')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <div class="row">
            <div class="col-md-10">
                <h4 class="card-title">Laporan</h4>
            </div>
            <div class="col-md-2">
                <center>
                    <button type="button" class="btn btn-primary">Tambah</button>
                </center>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th>No.Orde</th>
                      <th>Nama</th>
                      <th>No.Hp</th>
                      <th>Dateline</th>
                      <th>Pembayaran</th>
                      <th>Bahan</th>
                      <th>Potong</th>
                      <th>Sablon</th>
                      <th>Jahit</th>
                      <th>Press</th>
                      <th>Finishing</th>
                      <th>Quality Control</th>
                      <th>Konfirmasi</th>
                      <th>Keterangan</th>
                      <th>Ambil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>JEMBUT</td>
                        <td>KONTOL</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox" name="" value="">
                                </span>
                            </div>
                        </td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-success">Done</button>
                        </td>
                    </tr>
                    {{-- @if(count($data) > 0)
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
                    @endif --}}
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
     <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="{{ url('/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ url('js/flot-data.js') }}"></script>
@endsection