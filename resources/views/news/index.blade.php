@extends('layout.app')

@section('title')
    <title>Actualités</title>
@endsection

@section('body_class')
    blog-posts sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url( {{ asset('assets/img/news1.jpg') }} );">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Découvrez de nouvelles actualités</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="main main-raised">
    <div class="section section-blog">
        <div class="container">
            <h2 class="section-title">Actualités</h2>
            <div class="row">
                @foreach($news as $new)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-header card-header-image">
                                <a href="{{ route('news.show', $new->id) }}">
                                    <img src="{{ url('images/' . $new->images[0]->filename) }}" alt="">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-rose">Écrit par {{ $new->author->name }} {{ $new->getCreatedNewsDateForHumans() }}</h6>
                                <h4 class="card-title">
                                    <a href="{{ route('news.show', $new->id) }}">{{ $new->title }}</a>
                                </h4>
                                <p class="card-description">{!! $new->summary !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto d-flex justify-content-center">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
