<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->with('images')->get();
        foreach ($brands as $brand) {
            $brand->image = url('images/' . $brand->images[0]->filename);
        }
//        dd($brands);
        return response()->json($brands);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Brand::find($id)->products()->where('is_published', 1)->orderBy('id', 'DESC')->with('images')->get();
        foreach ($products as $product) {
            $product->main_image = url('images/' . $product->main_image);
        }
        return response()->json($products);
    }
}
