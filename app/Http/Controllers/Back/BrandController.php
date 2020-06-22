<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('back.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBrandRequest $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->banner = $request->banner;
        $brand->description = $request->description;
        $brand->save();

        // Save image
        $path = basename ($request->image->store('images', 'public'));

        $image = new Image();
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = $path;
        $image->save();

        session()->flash('success', 'La marque '. $brand->name.' a été enregistré avec succès');
        return redirect()->route('backbrands.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('back.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->banner = $request->banner;
        $brand->description = $request->description;
        $brand->save();

        // Save image
        $path = basename ($request->image->store('images', 'public'));

        $image = Image::find($brand->images[0]->id);
        $image->imageable_id = $brand->id;
        $image->imageable_type = 'App\Models\Brand';
        $image->filename = $path;
        $image->save();

        session()->flash('success', 'La marque '. $brand->name.' a été modifié avec succès');
        return redirect()->route('backbrands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        session()->flash('success', 'La marque '. $brand->name.' a été supprimé avec succès');
        return redirect()->route('backbrands.index');
    }
}
