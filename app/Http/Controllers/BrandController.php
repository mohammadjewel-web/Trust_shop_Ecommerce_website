<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index', ['brands' => Brand::all()]);
    }

    public function create(Request $request)
    {
        Brand::newBrand($request);
        return back()->with('message', 'Brand info save successfully.');
    }
    function delete($id){
        $brand=Brand::find($id);
        if ($brand->image){
            unlink($brand->image);
            $brand->delete();
            return back();
        }else{
            $brand->delete();
            return back()->with('message','Info Delete successfully..');
        }

    }
}
