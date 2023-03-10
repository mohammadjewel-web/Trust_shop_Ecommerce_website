@extends('admin.master')
@section('title')
    Order Detail Page
@endsection
@section('content')
    <main>
        <div class="container-fluid">
            <div class="card my-4" style="margin-left: 242px">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Order Basic Information
                </div>
                <div class="card-body">
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table class="table table-borderless table-hover">
                        <tr>
                            <th>Order No</th>
                            <td>{{$order->id}}</td>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <td>{{$order->order_date}}</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td>{{$order->order_total}}</td>
                        </tr>
                        <tr>
                            <th>Tax Total</th>
                            <td>{{$order->tax_total}}</td>
                        </tr>
                        <tr>
                            <th>Shipping Total</th>
                            <td>{{$order->shipping_total}}</td>
                        </tr>
                        <tr>
                            <th>Customer Info</th>
                            <td>{{$order->customer->name.'('.$order->customer->mobile}}</td>
                        </tr>
                        <tr>
                            <th>Delivery Address</th>
                            <td>{{$order->delivery_address}}</td>
                        </tr>
                        <tr>
                            <th>Payment Type</th>
                            <td>{{$order->payment_type}}</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td>{{$order->payment_status}}</td>
                        </tr>
                        <tr>
                            <th>Delivery Status</th>
                            <td>{{$order->delivery_status}}</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="card my-4" style="margin-left: 242px">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Order Product Information
                </div>
                <div class="card-body">
                    <h4 class="text-center text-success">{{session('message')}}</h4>
                    <table class="table table-borderless table-hover">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($order->orderDetails as $orderDetail)
                            <tr>
                                <td class="text-muted">{{$loop->iteration}}</td>
                                <td class="text-muted">{{$orderDetail->product_name}}</td>
                                <td class="text-muted">{{$orderDetail->product_price}}</td>
                                <td class="text-muted">{{$orderDetail->product_quantity}}</td>
                                <td class="text-muted">{{$orderDetail->product_price * $orderDetail->product_quantity}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
@endsection

