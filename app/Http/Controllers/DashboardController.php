<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalCustomer = Customer::count();
        $totalCategory = Category::count();
        $totalSubCategory = SubCategory::count();
        $totalBrand = Brand::count();

        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = Order::whereDate('created_at', $todayDate)->count();
        $thisMonthOrder = Order::whereMonth('created_at', $thisMonth)->count();
        $thisYearOrder = Order::whereYear('created_at', $thisYear)->count();
        return view('admin.dashboard.dashboard',
        compact(
            'totalOrder',
            'todayOrder',
            'thisMonthOrder',
            'thisYearOrder',
            'totalCustomer','totalCategory','totalSubCategory','totalBrand',
        ));
    }
}
