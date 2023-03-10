@extends('admin.master')
@section('title')
    Sub Category
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4" style="margin-left: 242px">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Add Sub Category form</strong>
                        <p class="text-center text-success ">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sub-category') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Select Category</label>
                                <select class="col-sm-9 form-control" name="category_id">
                                    <option value="">Select A Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Category Image</label>
                                <div class="col-sm-9">
                                    <input type="text" name="sub_category_name" class="form-control"
                                           id="inputPassword3">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">Category Table</strong>
                    </div>
                    <div class="card-body">
                        <!-- table -->
                        <table class="table table-borderless table-hover">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td class="text-muted">{{ $i++ }}</td>
                                    <td>{{ $subCategory->category_name }}</td>
                                    <td class="text-muted">{{ $subCategory->sub_category_name }}</td>
                                    <td class="text-muted">{{ $subCategory->status == 1 ? 'active' : 'Inactive' }}</td>

                                    <td>
                                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="btn btn-primary btn-sm" style="width: 75px;"
                                               href="{{ route('sub-edit', ['id' => $subCategory->id]) }}">Edit</a>
                                            @if($subCategory->status == 1)
                                                <a class="btn btn-warning btn-sm" style="width: 75px;"
                                                   href="{{ route('sub-status',['id'=>$subCategory->id]) }}">Inactive</a>
                                            @else
                                                <a class="btn btn-success btn-sm"
                                                   href="{{ route('sub-status',['id'=>$subCategory->id]) }}">Active</a>
                                            @endif
                                            <form action="{{ route('sub-delete') }}" class="dropdown-item"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" value="{{ $subCategory->id }}" name="cat_id">
                                                <button class="btn btn-danger btn-sm" type="submit"
                                                        style="width: 110px;"
                                                        onclick="return confirm('are you sure Delete this!!')">Delete
                                                </button>
                                            </form>
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
