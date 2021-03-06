@extends('layout.app')

@section('title')
    <title>Accueil</title>
@endsection

@section('body_class')
    product-page sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('assets/img/products-index.jpg') }});">
    <div class="container">
        <div class="row title-row">
            <div class="col-md-4 ml-auto">
                <button class="btn btn-white float-right"><i class="material-icons">shopping_cart</i> {{ session('userCart') !== null ? count(session('userCart')) : 0 }} Items</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section">
    <div class="container">
        <div class="main main-raised main-product">
            <form action="{{ url('cart') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-page1">
                                <img src="{{ Storage::disk('public')->url('images/' . $product->main_image) }}">
                            </div>
                            @foreach($product->images as $image)
                            <div class="tab-pane" id="product-page{{ $image->id }}">
                                <img src="{{ Storage::disk('public')->url('images/' . $image->filename) }}">
                            </div>
                            @endforeach
                        </div>
                        <ul class="nav flexi-nav" data-tabs="tabs" id="flexiselDemo1">
                            <li class="nav-item">
                                <a href="#product-page1" class="nav-link" data-toggle="tab">
                                    <img src="{{ Storage::disk('public')->url('images/' . $product->main_image) }}">
                                </a>
                            </li>
                            @foreach($product->images as $image)
                            <li class="nav-item">
                                <a href="#product-page{{ $image->id }}" class="nav-link" data-toggle="tab">
                                    <img src="{{ Storage::disk('public')->url('images/' . $image->filename) }}">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h2 class="title"> {{ $product->name }} </h2>
                        <h3 class="main-price">{{ $product->price }} €</h3>
                        <h5>Sortie {{ $product->getReleaseDateForHumans() }}</h5>
                        <div id="accordion" role="tablist">
                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Description
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{!! $product->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pick-size">
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Choisissez une couleur</label>
                                <select class="selectpicker @error('color') is-invalid @enderror" data-style="select-with-transition" data-size="7" name="color">
                                        <option value="" disabled selected>Choisissez une couleur</option>
                                    @foreach(config('sneakerx.colors') as $key => $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('color')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                                <label>Sélectionnez votre taille</label>
                                <select name="size" class="selectpicker @error('size') is-invalid @enderror" data-style="select-with-transition" data-size="7" >
                                        <option value="" disabled selected>Sélectionnez votre taille</option>
                                    @foreach(config('sneakerx.sizes') as $key => $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('size')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="row pick-size">
                            <div class="form-group col-md-6 col-sm-6">
                                <label>quantité</label>
                                <select class="selectpicker @error('quantity') is-invalid @enderror" data-style="select-with-transition" data-size="7" name="quantity">
                                        <option value="" disabled selected>Choisissez une quantité</option>
                                    @foreach(config('sneakerx.quantities') as $key => $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                                @error('quantity')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="row pull-right">
                            <button type="submit" class="btn btn-primary btn-round">Ajouter au panier &#xA0;<i class="material-icons">shopping_cart</i></button>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="main_image" value="{{ $product->main_image }}">
                        <input type="hidden" name="product_name" value="{{ $product->name }}">
                        <input type="hidden" name="product_description" value="{{ $product->description }}">
                        <input type="hidden" name="product_price" value="{{ $product->price }}">
                        <input type="hidden" name="product_brand" value="{{ $product->brand->name }}">
                    </div>
                </div>
                </form>
        </div>
        <div class="features text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-info">
                            <i class="material-icons">local_shipping</i>
                        </div>
                        <h4 class="info-title">Livraison sous 2 jours </h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dicta impedit nihil nulla quasi. Accusamus consectetur deleniti doloribus eos, ex, expedita incidunt libero maxime nisi nobis quasi tempore ut vero!.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-success">
                            <i class="material-icons">verified_user</i>
                        </div>
                        <h4 class="info-title">Politique de remboursement</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut deserunt dolorum, exercitationem fuga, fugiat illo impedit itaque laboriosam laudantium neque non obcaecati, quaerat quidem recusandae sint soluta tenetur vel!.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-rose">
                            <i class="material-icons">favorite</i>
                        </div>
                        <h4 class="info-title">Article populaire</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aspernatur dignissimos ducimus earum eveniet, excepturi incidunt laudantium nihil nulla officia quod repellendus sequi ullam, ut voluptates? Ea nam similique veritatis!.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-products">
            <h3 class="title text-center">Vous pourriez également être intéressé par:</h3>
            <div class="row">
                @foreach($randomProducts as $randomProduct)
                <div class="col-lg-3 col-md-6">
                    <div class="card card-product">
                        <div class="card-header card-header-image">
                            <a href="{{ route('products.show', $randomProduct->id) }}">
                                <img class="img" src="{{ Storage::disk('public')->url('images/' . $randomProduct->main_image) }}">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('products.show', $randomProduct->id) }}">{{ $randomProduct->brand->name }}</a>
                            </h4>
                            <div class="card-description">{!! $product->description !!}</div>
                        </div>
                        <div class="card-footer justify-content-between">
                            <div class="price">
                                <h4>{{ $randomProduct->price }} €</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                itemsToScroll: 1,
                animationSpeed: 400,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 3
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });
        });
    </script>
@endsection
