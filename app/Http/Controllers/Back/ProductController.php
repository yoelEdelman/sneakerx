<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('back.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        return view('back.products.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $path = basename ($request->image->store('images', 'public'));

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->main_image = $path;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->quantity = $request->qty;
        $product->release_date = $request->release_date;
        $product->is_published = $request->is_published;
        $product->brand_id = $request->brand;
        $product->save();

        // Save image
        foreach ($request->images as $image) {
            $path = basename ($image->store('images', 'public'));

            $image = new Image();
            $image->imageable_id = $product->id;
            $image->imageable_type = 'App\Models\Product';
            $image->filename = $path;
            $image->save();
        }

        session()->flash('success', 'Le produit '. $product->name.' a été enregistré avec succès');
        return redirect()->route('backproducts.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $brands = Brand::all();
        return view('back.products.edit', compact('product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $path = basename ($request->image->store('images', 'public'));

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->main_image = $path;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->quantity = $request->qty;
        $product->release_date = $request->release_date;
        $product->is_published = $request->is_published;
        $product->brand_id = $request->brand;
        $product->save();

        // Save image
        foreach ($request->images as $image) {
            $path = basename ($image->store('images', 'public'));

            $image = Image::find($image->id);
            $image->imageable_id = $product->id;
            $image->imageable_type = 'App\Models\Product';
            $image->filename = $path;
            $image->save();
        }

        session()->flash('success', 'Le produit '. $product->name.' a été modifié avec succès');
        return redirect()->route('backproducts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        session()->flash('success', 'Le produit '. $product->name.' a été supprimé avec succès');
        return redirect()->route('backproducts.index');
    }
}
