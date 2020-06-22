@extends('layout.app')

@section('title')
    <title>Accueil</title>
@endsection

@section('header')
    @include('layout.partials.header')
@endsection

@section('content')
<div class="main main-raised">
    <div class="section">
        <div class="container">

            {{-- Flash messages --}}
            @if(session()->has('success'))
                @include('messages.success')
            @elseif(session()->has('error'))
                @include('messages.error')
            @endif

            <h2 class="section-title">Produits</h2>
            <div class="row">
                @if(count($products) > 0)
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card card-product card-plain">
                                <div class="card-header card-header-image">
                                    <a href="{{ route('products.show', $product->id) }}">
                                        <img src="{{ url('images/' . $product->main_image) }}" alt="">
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <h4 class="card-title">
                                        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                    </h4>
                                    <p class="card-description">{!! $product->description !!}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="price-container">
                                        <span class="price"> {{ $product->price }} €</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    Aucun articles
                @endif
            </div>

            <br>

            <h2 class="section-title">Actualité</h2>
            <div class="row">
                @if(count($news) > 0)
                    @for($i = 0; $i < 5; $i++)
                        @if($i < 3)
                            <div class="col-md-4">
                                <div class="card card-background" style="background-image: url({{ url('images/' . $news[$i]->images[0]->filename) }})">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">Productivy Apps</h6>
                                        <a href="{{ route('news.show', $news[$i]->id) }}">
                                            <h3 class="card-title">{{ $news[$i]->title }}</h3>
                                        </a>
                                        <p class="card-description">{!! $news[$i]->summary !!}</p>
                                        <a href="{{ route('news.show', $news[$i]->id) }}" class="btn btn-white btn-round">
                                            <i class="material-icons">subject</i> Lire
                                        </a>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        @else
                            <div class="col-md-6">
                                <div class="card card-background" style="background-image: url({{ url('images/' . $news[$i]->images[0]->filename ) }})">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">Tutorials</h6>
                                        <a href="{{ route('news.show', $news[$i]->id) }}">
                                            <h3 class="card-title">{{ $news[$i]->title }}</h3>
                                        </a>
                                        <p class="card-description">{!! $news[$i]->summary !!}</p>
                                        <a href="{{ route('news.show', $news[$i]->id) }}" class="btn btn-white btn-round">
                                            <i class="material-icons">subject</i> Lire
                                        </a>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        @endif
                    @endfor
                @else
                    Aucune actualité
                @endif
            </div>
        </div>
    </div><!-- section -->
</div>
@endsection
