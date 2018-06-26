@extends('ceo.layoutceo')

@section('breadcrump', 'Detail Pesanan')

@section('action')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-block">
                    <label><b>No.Order : </b>{{ $order->id }} </label>
                    <hr>
                    <a><b>Nama        : </b>{{ $order->nama }}</a><br>
                    <a><b>No. HP      : </b>{{ $order->no_hp }}</a><br>
                    <a><b>Deadline    : </b>{{ $order->deadline }}</a><br>
                    <a><b>Pembayaran  : </b>{{ $order->pembayaran }}</a><br>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-block">
                    <center><a>Status Barang</a><center><hr>                       
                    <button class="btn btn-primary" id="btnproses" style="pointer-events: none;width:100%" type="button" disabled>Barang On Progress</button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-1">
                            <a>Bahan</a><br><hr>
                            <div class="input-group">
                                <input id="bahan" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Potong</a><br><hr>
                            <div class="input-group">
                                <input id="potong" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Sablon</a><br><hr>
                            <div class="input-group">
                                <input id="sablon" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Jahit</a><br><hr>
                            <div class="input-group">
                                <input id="jahit" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Press</a><br><hr>
                            <div class="input-group">
                                <input id="press" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Finishing</a><br><hr>
                            <div class="input-group">
                                <input id="finishing" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>QC</a><br><hr>
                            <div class="input-group">
                                <input id="qc" type="checkbox" name="" value="" disabled>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Konfirmasi</a><br><hr>
                            <div class="input-group">
                                <input id="konfirmasi" type="checkbox" name="" value="" disabled>
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
                    <a>Keterangan</a><br>
                    <div class="form-group">
                        <textarea style="width:100%" class="form-control" id="" rows="3" disabled>{{$order->keterangan}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type='text/javascript'>
    var data = {!! json_encode($order) !!}
    console.log(data)
    $('#bahan').prop('checked', data.bahan)
    $('#potong').prop('checked', data.potong)
    $('#sablon').prop('checked', data.sablon)
    $('#jahit').prop('checked', data.jahit)
    $('#press').prop('checked', data.press)
    $('#finishing').prop('checked', data.finishing)
    $('#quality_control').prop('checked', data.quality_control)
    $('#konfirmasi').prop('checked', data.konfirmasi)
    if (data.ambil) {
        $("#btnproses").attr('class', 'btn btn-success')
        $("#btnproses").html('Barang Sudah Diambil')
    }
</script>
@endsection