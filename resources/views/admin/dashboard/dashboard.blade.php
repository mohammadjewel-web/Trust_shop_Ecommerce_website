@extends('admin.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <main role="main" class="main-content">

        <div class="row">
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow bg-primary text-white border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary-light">
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col pr-0">
                                <p class="small text-muted mb-0">Total Order</p>
                                <span class="h3 mb-0 text-white">{{$totalOrder}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col pr-0">
                                <p class="small text-muted mb-0">Today Order</p>
                                <span class="h3 mb-0">{{$todayOrder}}</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">This Month Order</p>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <span class="h3 mr-2 mb-0"> {{$thisMonthOrder}} </span>
                                    </div>
                                    <div class="col-md-12 col-lg">
                                        <div class="progress progress-sm mt-2" style="height:3px">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 87%"
                                                 aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-shopping-cart  text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">This Year Order</p>
                                <span class="h3 mb-0">{{$thisYearOrder}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-user text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col pr-0">
                                <p class="small text-muted mb-0">Total Customer</p>
                                <span class="h3 mb-0 text-white">{{$totalCustomer}}</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-box text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Total Category</p>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <span class="h3 mr-2 mb-0"> {{$totalCategory}} </span>
                                    </div>
                                    <div class="col-md-12 col-lg">
                                        <div class="progress progress-sm mt-2" style="height:3px">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 87%"
                                                 aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-box  text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Total Sub Category</p>
                                <span class="h3 mb-0">{{$totalSubCategory}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-box  text-white mb-0"></i>
                          </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Total Brand</p>
                                <span class="h3 mb-0">{{$totalBrand}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    </main> <!-- main -->
@endsection
