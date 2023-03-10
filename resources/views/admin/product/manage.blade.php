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
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Selling Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td class="text-muted">{{$loop->iteration}}</td>
                                    <td>
                                        <div class="avatar avatar-md">
                                            <img src="{{asset($product->image)}}" alt="..."
                                                 style="width: 50px; height: 50px;" class="avatar-img rounded-circle">
                                        </div>
                                    </td>
                                    <td class="text-muted">{{$product->name}}</td>
                                    <td class="text-muted">{{$product->category->category_name}}</td>
                                    <td class="text-muted">{{$product->selling_price}}</td>
                                    <td class="text-muted">@if($product->status == 1)
                                            Published
                                        @else
                                            Unpublished
                                        @endif</td>
                                    <td>
                                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="btn btn-primary btn-sm" style="width: 75px;"
                                               href="{{route('product.detail', ['id' => $product->id])}}">Detail</a>
                                            <a class="btn btn-info btn-sm" style="width: 75px;"
                                               href="{{route('product.edit', ['id' => $product->id])}}">Edit</a>
                                            <a class="btn btn-danger btn-sm"
                                               href="{{route('product.delete', ['id' => $product->id])}}"
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

