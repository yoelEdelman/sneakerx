<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('is_published', 1)->with('images')->get()->random(10);

        foreach ($products as $product) {
            $product->main_image = url('images/' . $product->main_image);
        }

        $news = News::where('is_published', 1)->with('author', 'images')->get()->random(5);
        foreach ($news as $new) {
            $new->image = url('images/' . $new->images[0]->filename);
            $new->date = $new->getCreatedNewsDateForHumans();
        }

        return response()->json([
            'products' => $products,
            'news' => $news
        ]);
    }
}
