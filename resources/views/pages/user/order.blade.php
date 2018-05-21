@extends('layouts.home')
@section('content')
<div class="container">
    <div class="row mt centered">
        <div class="col-lg-6 col-lg-offset-3">
            <br>
            <h1>Tracking Your Order</h1>
            <h4>Your Order with Tracking Number : <a href="">999999</a></h4>
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
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <hr>
                    <div class="row mt centered">
                        <div class="col-lg-6">
                           <b>Pemesan :</b> <br> Suroto
                        </div>
                        <div class="col-lg-6">
                           <b>Dateline :</b> <br> 22/10/2010, 22:00 WIB
                        </div>
                    </div> 
                    <hr>
                    <button class="btn btn-primary" style="pointer-events: none;width:100%" type="button" disabled>ON PROGRESS</button>                                      
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
                                <input type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" name="" value="" disabled>
                            </td>
                            <td>
                                <input type="checkbox" name="" value="" disabled>
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
                        <textarea style="width:100%" class="form-control" id="" rows="3" disabled></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection