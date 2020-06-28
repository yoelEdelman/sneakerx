<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('is_published', 1)->orderBy('id', 'DESC')->with('images')->get();

        foreach ($products as $product) {
            $product->main_image = Storage::disk('public')->url('images/' . $product->main_image);
            $product->date = $product->getReleaseDateForHumans();
        }
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->where('is_published', 1)->with('images')->first();
        $product->main_image = Storage::disk('public')->url('images/' . $product->main_image);
        foreach ($product->images as $key => $image) {
            $image->filename = Storage::disk('public')->url('images/' . $image->filename);
            $product->date = $product->getReleaseDateForHumans();
        }
        return response()->json($product);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
//        dd('ok');
        $products = Product::where('is_published', 1)->where('name', 'LIKE', "%{$request->name}%")->with('images')->get();
        foreach ($products as $product) {
            $product->main_image = Storage::disk('public')->url('images/' . $product->main_image);
        }
        return response()->json($products);
    }
}
