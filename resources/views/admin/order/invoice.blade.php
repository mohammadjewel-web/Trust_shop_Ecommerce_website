@extends('admin.master')
@section('title')
    Order Invoice Page
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <div class="row mb-5">
                            <div class="col-12 text-center mb-4">
                                <img src="{{asset('frontEndAssets')}}/image/catalog/Logo.png" style="width: 15rem;"
                                     class="navbar-brand-img brand-sm mx-auto mb-4" alt="...">
                                <h2 class="mb-0 text-uppercase">Invoice</h2>
                                <p class="text-muted" style="text-align: -webkit-right"> Invoice #: 00{{$order->id}}
                                    <br/>
                                    Order Date: {{$order->order_date}}<br/>
                                    Invoice date: {{date('Y-m-d')}}</p>
                            </div>
                            <div class="col-md-7">
                                <p class="small text-muted text-uppercase mb-2">Billing Info</p>
                                <p class="mb-4">
                                    <strong>{{$order->customer->name}}</strong><br>
                                    {{$order->customer->email}}<br/>
                                    {{$order->customer->mobile}}

                                </p>

                            </div>
                            <div class="col-md-5">
                                <p class="small text-muted text-uppercase mb-2" style="text-align: -webkit-right">
                                    Delivery Address</p>
                                <p class="mb-4" style="text-align: -webkit-right">
                                    <strong> {{$order->delivery_address}}<br/></strong><br/>
                                </p>
                            </div>
                        </div> <!-- /.row -->
                        <table class="table table-borderless table-striped">
                            <thead>
                            <tr>
                                <td>Payment Method</td>
                                <td style="text-align: -webkit-right">{{$order->payment_type == 1 ? 'Cash' : 'Online'}}</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{$order->payment_type == 1 ? 'Cash' : 'Online'}}</th>
                                <th style="text-align: -webkit-right">{{$order->order_total}}</th>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table-borderless table-striped py-5">
                            <thead>
                            <tr>
                                <td>Item Name</td>
                                <td style="text-align: -webkit-right">Price</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderDetails as $orderDetail)
                                <tr>
                                    <th>{{$orderDetail->product_name}}</th>
                                    <th style="text-align: -webkit-right">{{$orderDetail->product_price * $orderDetail->product_quantity}}</th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
