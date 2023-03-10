@extends('admin.master')
@section('title')
    Brand
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4" style="margin-left: 242px">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Create Brand</strong>
                        <p class="text-center text-success ">{{ session('message') }}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('brand.create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" placeholder="Brand name" class="form-control"
                                           id="inputEmail3">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Category Image</label>
                                <div class="col-sm-9">
                                    <input name="image" type="file" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <button type="submit" class="btn btn-primary">Create New Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <strong class="card-title">Brand Table</strong>
                    </div>
                    <div class="card-body">
                        <!-- table -->
                        <table class="table table-borderless table-hover">
                            <thead>
                            <tr>
                                <th>sl no</th>
                                <th>Image</th>
                                <th>Brand Name</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=1 @endphp
                            @foreach($brands as $brand)
                                <tr>
                                    <td class="text-muted">{{ $i++ }}</td>
                                    <td>
                                        <div class="avatar avatar-md">
                                            <img src="{{asset($brand->image)}}" alt="..."
                                                 style="width: 50px; height: 50px;" class="avatar-img rounded-circle">
                                        </div>
                                    </td>
                                    <td class="text-muted">{{$brand->name}}</td>
                                    <td class="text-muted">{{$brand->status == 1 ? 'Active' : 'Inactive'}}</td>

                                    <td>
                                        <button class="btn btn-sm dropdown-toggle more-horizontal" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="btn btn-primary btn-sm" style="width: 75px;"
                                               href="{{route('brand.edit', ['id' => $brand->id])}}">Edit</a>
                                            @if($brand->status == 1)
                                                <a class="btn btn-warning btn-sm" style="width: 75px;"
                                                   href="#">Inactive</a>
                                            @else
                                                <a class="btn btn-success btn-sm" href="#">Active</a>
                                            @endif
                                            <a class="btn btn-danger btn-sm"
                                               href="{{route('brand.delete', ['id' => $brand->id])}}">Delete</a>
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
