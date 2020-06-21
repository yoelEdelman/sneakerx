@extends('layout.app')

@section('title')
    <title>Marques</title>
@endsection

@section('body_class')
    ecommerce-page sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ asset('assets/img/brands-index.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <div class="brand">
                    <h1 class="title">Liste des marques!</h1>
                    <h4>Livraison gratuite sur tous les produits. Utiliser le coupon <b>25summer</b> pour une réduction de 25%</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="main main-raised">
    <div class="team-2" id="team-2">
        <div class="container">
            <div class="row">
                @foreach($brands as $brand)
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-header card-header-image">
                            <a href="{{ route('brands.show', $brand->id) }}" class="bg-white p-1">
                                <img class="img" src="{{ Storage::disk('public')->url('images/' . $brand->images[0]->filename) }}" style="height: 215px">
                            </a>
                        </div>
                        <div class="card-body ">
                            <h4 class="card-title">{{ $brand->name }}</h4>
                            <h6 class="card-category text-muted">{{ $brand->banner }}</h6>
                            <h5><em>{{ $brand->getActiveProducts() }} produits actifs</em></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
