<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
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
        $news = News::all();
        return view('back.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();
        return view('back.news.create', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
    {
//        dd($request);
        $news = new News();
        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->content = $request->content;
        $news->is_published = $request->is_published;
        $news->author_id = Auth::id();
        $news->save();

        $path = basename ($request->image->store('images', 'public'));

        $image = new Image();
        $image->imageable_id = $news->id;
        $image->imageable_type = 'App\Models\News';
        $image->filename = $path;
        $image->save();

        session()->flash('success', 'L\'actualité '. $news->title.' a été enregistré avec succès');
        return redirect()->route('backnews.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('back.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->summary = $request->summary;
        $news->content = $request->content;
        $news->is_published = $request->is_published;
        $news->author_id = Auth::id();
        $news->save();

        $path = basename ($request->image->store('images', 'public'));

        $image = Image::find($news->images[0]->id);
        $image->imageable_id = $news->id;
        $image->imageable_type = 'App\Models\News';
        $image->filename = $path;
        $image->save();

        session()->flash('success', 'L\'actualité '. $news->title.' a été modifié avec succès');
        return redirect()->route('backnews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        session()->flash('success', 'L\'actualité '. $news->name.' a été supprimé avec succès');
        return redirect()->route('backnews.index');
    }
}
