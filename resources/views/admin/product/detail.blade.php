@extends('admin.master')
@section('title')
    Product Detail
@endsection
@section('content')
    <section class="mt-3 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Product Detail Page</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Product ID</th>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <th>Product Code</th>
                                    <td>{{$product->code}}</td>
                                </tr>
                                <tr>
                                    <th>Product Name</th>
                                    <td>{{$product->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Category</th>
                                    <td>{{$product->category->category_name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Sub Category</th>
                                    <td>{{$product->subCategory->sub_category_name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Brand</th>
                                    <td>{{$product->brand->name}}</td>
                                </tr>
                                <tr>
                                    <th>Product Short Description</th>
                                    <td>{{$product->short_description}}</td>
                                </tr>
                                <tr>
                                    <th>Product Long Description</th>
                                    <td>{!! $product->long_description !!}</td>
                                </tr>
                                <tr>
                                    <th>Product Regular Price</th>
                                    <td>{{$product->regular_price}}</td>
                                </tr>
                                <tr>
                                    <th>Product Selling Price</th>
                                    <td>{{$product->selling_price}}</td>
                                </tr>
                                <tr>
                                    <th>Product Stock Amount</th>
                                    <td>{{$product->stock_amount}}</td>
                                </tr>
                                <tr>
                                    <th>Product Image</th>
                                    <td><img src="{{asset($product->image)}}" alt="" height="180" width="200"></td>
                                </tr>
                                <tr>
                                    <th>Product Other Image</th>
                                    <td>
                                        @foreach($product->otherImages as $otherImage)
                                            <img src="{{asset($otherImage->image)}}" alt="" height="180" width="200"/>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Product Publication Status</th>
                                    <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
