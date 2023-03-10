@extends('admin.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row" style="margin-left: 242px">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Edit Product Form</strong>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-success py-2">{{session('message')}}</p>
                        <form action="{{route('product.update', ['id' => $product->id])}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Category</label>
                                    <select id="inputState5" class="form-control" required name="category_id">
                                        <option value="" disabled selected> -- Select Product Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}> {{$category->category_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Sub Category</label>
                                    <select id="inputState5" class="form-control" required name="sub_category_id">
                                        <option value="" disabled selected> -- Select Product Sub Category --</option>
                                        @foreach($sub_categories as $sub_category)
                                            <option value="{{$sub_category->id}}" {{$sub_category->id == $product->sub_category_id ? 'selected' : ''}}> {{$sub_category->sub_category_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Brand Name</label>
                                    <select id="inputState5" class="form-control" required name="brand_id">
                                        <option value="" disabled selected> -- Select Product Brand --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}> {{$brand->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Product Name</label>
                                    <input type="text" value="{{$product->name}}" placeholder="Product Name"
                                           class="form-control" name="name" id="inputEmail5">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Product Code</label>
                                    <input type="text" value="{{$product->code}}" placeholder="Product Code"
                                           class="form-control" name="code" id="inputPassword5">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Shot Description</label>
                                <textarea class="form-control" id="inputAddress5" placeholder="Short Description"
                                          name="short_description">{{$product->short_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Description</label>
                                <textarea class="form-control" id="summernote" placeholder="Description"
                                          name="long_description">{{$product->long_description}}</textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputState">Regular Price</label>
                                    <input type="number" placeholder="Product Regular Price"
                                           value="{{$product->regular_price}}" class="form-control" name="regular_price"
                                           id="inputPassword5">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Selling Price</label>
                                    <input type="number" placeholder="Product Selling Price"
                                           value="{{$product->selling_price}}" class="form-control" name="selling_price"
                                           id="inputPassword5">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Product Stock Amount</label>
                                    <input type="number" placeholder="Product Stock Amount"
                                           value="{{$product->stock_amount}}" class="form-control" name="stock_amount"
                                           id="inputPassword5">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Product Image</label>
                                    <input type="file" class="form-control" name="image"/>
                                    <img src="{{asset($product->image)}}" alt="" height="80" width="100"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Product Other Image</label>
                                    <input type="file" class="form-control" name="other_image[]" multiple/>
                                    @foreach($product->otherImages as $otherImage)
                                        <img src="{{asset($otherImage->image)}}" alt="" height="80" width="100"/>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-row">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Create Product
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
@endsection
