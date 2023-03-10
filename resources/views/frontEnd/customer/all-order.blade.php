@extends('frontEnd.master')
@section('title')
    Customer All Order
@endsection
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Customer All Order</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="">My Dashboard</a></li>
                            <li class="list-group-item"><a href="">My Profile</a></li>
                            <li class="list-group-item"><a href="{{route('customer.all-order')}}">My Order</a></li>
                            <li class="list-group-item"><a href="">Change Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Order No</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->order_date}}</td>
                                    <td>{{$order->order_status}}</td>
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

