@extends('layouts.admin')

@section('breadcrump', 'offline')

@section('action')
@endsection

@section('content')
  <div class="row">
                    <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Checkout</h4>
                    
                    <div class="table-responsive">
                        <table class="table">
                                <tr>

                                   
                                    <th>Nama</th>
                                    <th>Pesanan</th>
                                    <th>Warna</th>
                                    <th>Desain</th>
                                    <th>Ket.</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td><input type = "text" placeholder = "Fauzan" size="5"></td>
                                    <td><input type = "text" placeholder = "Baju" size="5"></td>
                                    <td><input type = "text" placeholder = "Merah" size="5"></td>
                                    <td><div class="col-md-8 col-8 align-self-center">
                                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
                                    </div></td>
                                                <td><input type = "text" placeholder = "-" size="5"></td></td>
                                                <td><input type = "text" placeholder = "1" size="5"></td></td>
                                                <td><input type = "text" placeholder = "Rp 50.000,-" size="5"></td></td>
                                                <td><input type = "text" placeholder = "Rp 50.000,-" size="5"></td></td>

                                </tr>                  
                            </tbody>

                        </table>
                            <div class="col-md-6 col-4 align-self-center">
                                <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> <i class="fa fa-shopping-cart m-r-10" aria-hidden="true"></i>Check Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Data Penjualan Offline</h4>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pesanan</th>
                                        <th>Warna</th>
                                        <th>Desain</th>
                                        <th>Ket.</th>
                                        <th>Qty</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Fauzan</td>
                                        <td>Kaos</td>
                                        <td>Merah</td>
                                        <td><div class="col-md-8 col-8 align-self-center">
                                            <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
                                         </div></td>
                                        <td>-</td>
                                        <td>1</td>
                                        <td>Rp. 50.000</td>
                                        <td>Rp. 50.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
@endsection