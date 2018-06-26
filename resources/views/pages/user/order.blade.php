@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <br>
            <h1>Tracking Your Order</h1>
            <h4>Your Order with Tracking Number : <a href="">{{ $data->id }}</a></h4>
        </div>
    </div>
    
    <hr>
    
    {{-- <div class="row mt centered">
        <div class="col-lg-12">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div>
    </div> --}}

    <div class="row mt">
        <div class="col-lg-3">                               
            <div class="thumbnail">
                    <img src="{{ url('/img/img_produk.jpg') }}" width="150" height="350" alt="">
                <div class="caption">
                    {{-- <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div> --}}
                    <hr>
                    <div class="row mt centered">
                        <div class="col-lg-6">
                           <b>Pemesan :</b> <br> {{$data->nama}}
                        </div>
                        <div class="col-lg-6">
                           <b>Dateline :</b> <br> {{$data->deadline}}
                        </div>
                    </div> 
                    <hr>
                    <button class="btn btn-primary" id="btnproses" style="pointer-events: none;width:100%" type="button" disabled>ON PROGRESS</button>                                      
                </div>
            </div>            
        </div>

        <div class="col-lg-9">
            <div class="thumbnail">
                <div class="caption">
                <center><h4>Detail Order</h4></center>
                <hr>
                <table class="table table-hover" style="text-align:center">
                    <thead>
                        <tr>
                            <th>Bahan</th>
                            <th>Potong</th>
                            <th>Sablon</th>
                            <th>Jahit</th>
                            <th>Press</th>
                            <th>Finishing</th>
                            <th>Quality Control</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input id="bahan" type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input id="potong" type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input id="sablon" type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input id="jahit" type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input id="press" type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input id="finishing" type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input id="quality_control" type="checkbox" name="" value="" disabled>
                            </td>                                                    
                        </tr>
                    </tbody>     
                </table>
                </div>
            </div>
        </div>

        <br>

        <div class="col-lg-9">
            <div class="thumbnail">
                <div class="caption">
                <center><h4>Keterangan Pesanan</h4></center>
                <hr>
                    <div class="form-group">
                        <textarea style="width:100%" class="form-control" id="" rows="3" disabled>{{$data->keterangan}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type='text/javascript'>
    var data = {!! json_encode($data) !!}
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
        $("#btnproses").html('ANDA SUDAH AMBIL')
    }
</script>
@endsection
