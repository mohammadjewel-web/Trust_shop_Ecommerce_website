@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row" style="margin-left: 242px">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">All Product Information</strong>
                    </div>
                    <div class="card-body">
                        <!-- table -->
                        <h4 class="text-center text-success">{{session('message')}}</h4>
                        <table class="table table-borderless table-hover">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Order No</th>
                                <th>Customer Info</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td class="text-muted">{{$loop->iteration}}</td>
                                    <td class="text-muted">{{$order->id}}</td>
                                    <td class="text-muted">{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>
                                    <td class="text-muted">{{$order->order_total}}</td>
                                    <td class="text-muted">{{$order->order_date}}</td>
                                    <td class="text-muted">{{$order->order_status}}</td>
                                    <td>
                                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="btn btn-primary btn-sm" style="width: 75px;"
                                               href="{{route('admin.order-detail', ['id' => $order->id])}}">Detail</a>
                                            <a class="btn btn-info btn-sm" style="width: 75px;"
                                               href="{{route('admin.order-invoice', ['id' => $order->id])}}">Invoice</a>
                                            <a class="btn btn-danger btn-sm"
                                               href="{{route('admin.order-delete', ['id' => $order->id])}}"
                                               onclick="return confirm('Are you sure to delete this')">Delete</a>
                                        </div>
                                    </td>
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
