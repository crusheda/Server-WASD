@extends('ceo.layoutceo')

@section('breadcrump', 'Dashboard')

@section('action')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
            <div class="row">              
                <div class="col-md-12">
                    <center><i class="fa fa-table m-r-10"></i>Laporan Pesanan</center><hr>
                </div>
            </div>
            <div class="row">
                
                <div class="col-md-2"></div>
                <div class="col-md-1">
                    <a>Bahan</a><br><hr>
                    <div class="input-group">
                        {{ $order['bahan'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>Potong</a><br><hr>
                    <div class="input-group">
                        {{ $order['potong'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>Sablon</a><br><hr>
                    <div class="input-group">
                        {{ $order['sablon'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>Jahit</a><br><hr>
                    <div class="input-group">
                        {{ $order['jahit'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>Press</a><br><hr>
                    <div class="input-group">
                        {{ $order['press'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>Finishing</a><br><hr>
                    <div class="input-group">
                        {{ $order['finishing'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>QC</a><br><hr>
                    <div class="input-group">
                        {{ $order['qc'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-1">
                    <a>Konfirmasi</a><br><hr>
                    <div class="input-group">
                        {{ $order['konfirmasi'] }} / {{ $order['total'] }}
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.Order</th>
                                <th>Nama</th>
                                <th>No.Hp</th>
                                <th>Dateline</th>
                                <th>Pembayaran</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order['show'] as $order)
                            <tr>
                            <td><b><a href="{{ route('ceo.detail', $order->id) }}" target="_blank">{{ $order->id }}</a></b></td>
                                <td><a>{{ $order->nama }}</a></td>
                                <td><a>{{ $order->no_hp }}</a></td>
                                <td><a>{{ $order->deadline }}</a></td>
                                <td><a>{{ $order->pembayaran }}</a></td>
                                <td><button class="btn btn-success" id="btnproses" style="pointer-events: none;width:100%" type="button" disabled>Barang Sudah Diambil</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type='text/javascript'>
    var data = {!! json_encode($order) !!}
    console.log(data)
    if (data.ambil) {
        $("#btnproses").attr('class', 'btn btn-primary')
        $("#btnproses").html('Barang On Progress')
    }
</script>
@endsection