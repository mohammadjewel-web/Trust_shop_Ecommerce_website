<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('frontEnd.customer.dashboard');
    }
    public function allOrder()
    {
        return view('frontEnd.customer.all-order', ['orders' => Order::where('customer_id', Session::get('customer_id'))->get()]);
    }
}
