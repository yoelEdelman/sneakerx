@extends('layout.app')

@section('title')
    <title>Liste des produits</title>
@endsection

@section('body_class')
    ecommerce-page sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url( {{ asset('assets/img/products-index.jpg') }} );">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <div class="brand">
                    <h1 class="title">Marque
                        @if(count($products) > 0)
                            {{ $products[0]->brand->name }}
                        @else
                            !!!
                        @endif
                    </h1>
                    <h4>Livraison gratuite sur tous les produits. Utiliser le coupon <b>25summer</b> pour une réduction de 25%</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="main main-raised">
    <div class="section">
        <div class="container">
            <div class="row">
                <h3>Description de la marque</h3>
                <p>{!! $products[0]->brand->description !!}</p>
                <h3>Produits disponibles</h3>
                <div class="col-md-12">
                    <div class="row">
                        @if(count($products) > 0)
                            @foreach($products as $product)
                                <div class="col-md-4">
                                    <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                                        <div class="card-header card-header-image">
                                            <a href="{{ route('products.show', $product->id) }}">
                                                <img src="{{ Storage::disk('public')->url('images/' . $product->main_image) }}" alt="...">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <a href="#">
                                                <h4 class="card-title">{{ $product->name }}</h4>
                                            </a>
                                            <p class="description">{!! $product->description !!}</p>
                                        </div>
                                        <div class="card-footer justify-content-between">
                                            <div class="price-container">
                                                <span class="price">{{ $product->price }} € </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert" role="alert">
                                Aucun produits
                            </div>
                        @endif
                    </div>
                    @if(count($products) > 0)
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto d-flex justify-content-center">
                                {{ $products->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <br>

        </div>
    </div>
</div>
@endsection
