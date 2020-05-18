@extends('layout.app')

@section('title')
    <title>Panier</title>
@endsection

@section('body_class')
    shopping-cart sidebar-collapse
@endsection

@section('header')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/examples/bg2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Confirmation Page</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="main main-raised">
        <div class="container">
            <div class="row">
                <h3>Récapitulatif de votre commande</h3>
                @if($customer)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nom: {{ $customer->name }}</h5>
                            <p class="card-text">{{ $customer->email }}</p>
                            <p class="card-text">Adresse: {{ $customer->address }} {{ $customer->zip_code }}</p>
                            @if($products)
                                @foreach($products as $product)
                                    <div class="card-body">
                                        <h5 class="card-title">Nom du produit: {{ $product['name'] }}</h5>
                                        <p class="card-text">Quantité: {{ $product['quantity'] }}</p>
                                        <p class="card-text">Couleur: {{ $product['color'] }}</p>
                                        <p class="card-text">Prix: {{ $product['price'] }}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
