<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

use Symfony\Contracts\Service\Attribute\Required;

class BrandController extends Controller
{
    public function index()
    {
        return view('Brands.add');
    }

    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name=$request->brand;
        $brand->save();

        return redirect()->back();
    }

    public function view()
    {
        $brands = Brand::all();

        return view('Brands.index',compact('brands'));
        //you can also use ->with
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        //find = where

        return view('Brands.edit',compact('brand'));

    }

    public function update(Request $request)
    {
        $brand = Brand::find($request->id);

        $brand->update([
            'name' => $request->brand
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->back();
    }
}
