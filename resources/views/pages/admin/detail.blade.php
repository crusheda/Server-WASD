@extends('layouts.admin')

@section('breadcrump', 'Detail Order')

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
                        {!! Form::open(['action' => ['OrderController@done'], 'method' => 'POST', 'style' => 'display: inline']) !!}
                        {{Form::hidden('id', $order->id)}}
                        {{ Form::submit('Ambil Barang', ['class' => 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-1">
                            <a>Bahan</a><hr>
                            <div class="input-group">
                                <input type="checkbox" style="width:80px;height:80px" id="bahan{{$order->id}}" name="" value="" onchange="setBahan({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Potong</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="potong{{$order->id}}" name="" value="" onchange="setPotong({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Sablon</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="sablon{{$order->id}}" name="" value="" onchange="setSablon({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Jahit</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="jahit{{$order->id}}" name="" value="" onchange="setJahit({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Press</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="press{{$order->id}}" name="" value="" onchange="setPress({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Finishing</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="finishing{{$order->id}}" name="" value="" onchange="setFinish({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>QC</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="quality_control{{$order->id}}" name="" value="" onchange="setQc({{ $order->id }}, this)">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <a>Konfirmasi</a><br><hr>
                            <div class="input-group">
                                    <input type="checkbox" style="width:80px;height:80px" id="konfirmasi{{$order->id}}" name="" value="" onchange="setKonfirmasi({{ $order->id }}, this)">
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
@endsection

@section('js')  
    <script type='text/javascript'>
        var data = {!! json_encode($order) !!}
        data.forEach(el => {
            $(`#bahan${el.id}`).prop('checked', el.bahan)
            $(`#potong${el.id}`).prop('checked', el.potong)
            $(`#sablon${el.id}`).prop('checked', el.sablon)
            $(`#jahit${el.id}`).prop('checked', el.jahit)
            $(`#press${el.id}`).prop('checked', el.press)
            $(`#finishing${el.id}`).prop('checked', el.finishing)
            $(`#quality_control${el.id}`).prop('checked', el.quality_control)
            $(`#konfirmasi${el.id}`).prop('checked', el.konfirmasi)
        })
    </script>
    <script>
        function setBahan(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/bahan',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setPotong(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/potong',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setSablon(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/sablon',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setJahit(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/jahit',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setPress(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/press',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setFinish(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/finishing',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setQc(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/quality_control',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }

        function setKonfirmasi(id, el) {
            $.ajax({
                url : 'http://localhost:8000/api/konfirmasi',
                type : 'POST',
                data : {
                    'id' : id,
                    'value': el.checked
                },
                dataType:'json',
                success : function(data) {              
                    console.log(data)
                },
                error : function(request,error)
                {
                    console.log("Request: "+JSON.stringify(request) + " " + error)
                }
            })
        }
    </script>
@endsection