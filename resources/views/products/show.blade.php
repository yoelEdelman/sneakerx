@extends('layout.app')

@section('title')
    <title>Accueil</title>
@endsection

@section('body_class')
    product-page sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter" data-parallax="true" filter-color="rose" style="background-image: url('../assets/img/bg6.jpg');">
    <div class="container">
        <div class="row title-row">
            <div class="col-md-4 ml-auto">
                <button class="btn btn-white float-right"><i class="material-icons">shopping_cart</i> 0 Items</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section">
    <div class="container">
        <div class="main main-raised main-product">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="tab-content">
                        <div class="tab-pane active" id="product-page1">
                            <img src="{{ $product->main_image }}">
                        </div>
                        @foreach($product->images as $image)
                        <div class="tab-pane" id="product-page{{ $image->id }}">
                            <img src="{{ $image->filename }}">
                        </div>
                        @endforeach
                    </div>
                    <ul class="nav flexi-nav" data-tabs="tabs" id="flexiselDemo1">
                        <li class="nav-item">
                            <a href="#product-page1" class="nav-link" data-toggle="tab">
                                <img src="{{ $product->main_image }}">
                            </a>
                        </li>
                        @foreach($product->images as $image)
                        <li class="nav-item">
                            <a href="#product-page{{ $image->id }}" class="nav-link" data-toggle="tab">
                                <img src="{{ $image->filename }}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <h2 class="title"> Becky Silk Blazer </h2>
                    <h3 class="main-price">$335</h3>
                    <div id="accordion" role="tablist">
                        <div class="card card-collapse">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Description
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-collapse">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Designer Information
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">{{ $product->description }}</div>
                            </div>
                        </div>
                        <div class="card card-collapse">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Details and Care
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>Storm and midnight-blue stretch cotton-blend</li>
                                        <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
                                        <li>Two button fastening</li>
                                        <li>84% cotton, 14% nylon, 2% elastane</li>
                                        <li>Dry clean</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pick-size">
                        <div class="col-md-6 col-sm-6">
                            <label>Select color</label>
                            <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                <option value="1">Rose </option>
                                <option value="2">Gray</option>
                                <option value="3">White</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>Select size</label>
                            <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                <option value="1">Small </option>
                                <option value="2">Medium</option>
                                <option value="3">Large</option>
                            </select>
                        </div>
                    </div>
                    <div class="row pull-right">
                        <button class="btn btn-rose btn-round">Add to Cart &#xA0;<i class="material-icons">shopping_cart</i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="features text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-info">
                            <i class="material-icons">local_shipping</i>
                        </div>
                        <h4 class="info-title">Livraison sous 2 jours </h4>
                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-success">
                            <i class="material-icons">verified_user</i>
                        </div>
                        <h4 class="info-title">Refundable Policy</h4>
                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <div class="icon icon-rose">
                            <i class="material-icons">favorite</i>
                        </div>
                        <h4 class="info-title">Article populaire</h4>
                        <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
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
                                <img class="img" src="{{ $randomProduct->main_image }}">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('products.show', $randomProduct->id) }}">{{ $randomProduct->brand->name }}</a>
                            </h4>
                            <div class="card-description">{{ $randomProduct->description }}</div>
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
