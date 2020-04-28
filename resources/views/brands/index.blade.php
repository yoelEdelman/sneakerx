@extends('layout.app')

@section('title')
    <title>Accueil</title>
@endsection

@section('body_class')
    ecommerce-page sidebar-collapse
@endsection

@section('header')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/examples/clark-street-merc.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <div class="brand">
                    <h1 class="title">Nos marques!</h1>
                    <h4>Free global delivery for all products. Use coupon <b>25summer</b> for an extra 25% Off</h4>
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
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">The Executive Team 2</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                </div>
            </div>
            <div class="row">
                @foreach($brands as $brand)
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-header card-header-image">
                            <a href="{{ route('brands.show', $brand->id) }}">
                                <img class="img" src="{{ $brand->images[0]->filename }}">
                            </a>
                        </div>
                        <div class="card-body ">
                            <h4 class="card-title">{{ $brand->name }}</h4>
                            <h6 class="card-category text-muted">{{ $brand->banner }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
