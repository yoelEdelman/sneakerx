<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::where('is_published', 1)->orderBy('id', 'DESC')->with('author', 'images')->get();
        foreach ($news as $new) {
            $new->image = Storage::disk('public')->url('images/' . $new->images[0]->filename);
            $new->date = $new->getCreatedNewsDateForHumans();
        }
        return response()->json($news);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::where('id', $id)->where('is_published', 1)->with('author', 'images')->first();
        $new->image = Storage::disk('public')->url('images/' . $new->images[0]->filename);
        $new->date = $new->getCreatedNewsDateForHumans();
        return response()->json($new);
    }
}
