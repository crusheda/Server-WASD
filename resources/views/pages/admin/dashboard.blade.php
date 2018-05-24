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
            <div class="col-md-12">
                <i class="fa fa-table m-r-10"></i>Laporan Pesanan
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
                    @if(count($orders) > 0)
                        @php ($no = 0)
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->nama }}</td>
                                <td>{{ $order->no_hp }}</td>
                                <td>{{ $order->deadline }}</td>
                                <td>{{ $order->pembayaran }}</td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        <input type="checkbox" id="bahan{{$order->id}}" name="" value="" onchange="setBahan({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="potong{{$order->id}}" name="" value="" onchange="setPotong({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="sablon{{$order->id}}" name="" value="" onchange="setSablon({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="jahit{{$order->id}}" name="" value="" onchange="setJahit({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="press{{$order->id}}" name="" value="" onchange="setPress({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="finishing{{$order->id}}" name="" value="" onchange="setFinish({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="quality_control{{$order->id}}" name="" value="" onchange="setQc({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="checkbox" id="konfirmasi{{$order->id}}" name="" value="" onchange="setKonfirmasi({{ $order->id }}, this)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="textarea" id="keterangan{{$order->id}}" name="" value="{{$order->keterangan}}" disabled>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                
                                    {{-- <button type="button" class="btn btn-success">Done</button> --}}
                                    {!! Form::open(['action' => ['OrderController@done'], 'method' => 'POST', 'style' => 'display: inline']) !!}
                                        {{Form::hidden('id', $order->id)}}
                                        {{ Form::submit('Ambil', ['class' => 'btn btn-success']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan=3>Tidak Ada Data</td>
                        </tr>
                    @endif
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
    <script type='text/javascript'>
        // var fuck = document.getElementById('bahan1')
        // console.log(fuck)
        var data = {!! json_encode($orders) !!}
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