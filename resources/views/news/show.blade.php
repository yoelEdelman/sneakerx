@extends('layout.app')

@section('title')
    <title>Actualité</title>
@endsection

@section('body_class')
    blog-post sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter" data-parallax="true" style="background-image: url( {{ asset('assets/img/bg5.jpg') }} );">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h1 class="title">How We Built the Most Successful Castle Ever</h1>
                <h4>The last 48 hours of my life were total madness. This is what I did.</h4>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="main main-raised">
    <div class="container">
        <div class="section section-text">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h3 class="title">{{ $new->title }}</h3>
                    <p>{{ $new->content }}
                        <br> <br>
                    </p>
                    <div class="blockquote undefined d-flex justify-content-between">
                        <small>
                            {{ $new->author->name }}
                        </small>
                        <small>
                            {{ $new->getCreatedNewsDateForHumans() }}
                        </small>
                    </div>
                </div>
                <div class="section col-md-10 ml-auto mr-auto">
                    <div class="row">
                        @foreach($new->images as $image)
                        <div class="col-md-10 m-auto">
                            <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ $image->filename }}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
