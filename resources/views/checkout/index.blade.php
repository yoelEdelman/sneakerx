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
                    <h2 class="title">Shopping Page</h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="main main-raised">
        <div class="container">
            <div class="row row justify-content-between">
                <div class="col-6 mt-2">
                    <div class="row">

                        <form class="col-12" id="contact-form" action="{{ url('checkout') }}" method="POST">
                            @csrf

                            <div class="card card-contact">
                                <div class="card-header card-header-raised card-header-danger text-center">
                                    <h4 class="card-title">Address</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="bmd-label-floating">First name</label>
                                                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}">
                                                <span class="material-input"></span>
                                                @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="bmd-label-floating">Last name</label>
                                                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}">
                                                <span class="material-input"></span>
                                                @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="bmd-label-floating">Address</label>
                                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}">
                                        <span class="material-input"></span>
                                        @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="bmd-label-floating">Complement d'adresse</label>
                                        <input type="text" name="additional_address" class="form-control" value="{{ old('additional_address') }}">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="bmd-label-floating">Ville</label>
                                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                                                <span class="material-input"></span>
                                                @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="bmd-label-floating">Code postal</label>
                                                <input type="text" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror" value="{{ old('zip_code') }}">
                                                <span class="material-input"></span>
                                                @error('zip_code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                        <span class="material-input"></span>
                                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>

                        <div class="card card-contact mt-5">
                                <div class="card-header card-header-raised card-header-danger text-center">
                                    <h4 class="card-title">Secure Payment</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group label-floating is-empty">
                                        <label class="bmd-label-floating">Credit Card Number:</label>
                                        <input type="text" name="card_number" class="form-control @error('card_number') is-invalid @enderror" value="{{ old('card_number') }}">
                                        <span class="material-input"></span>
                                        @error('card_number')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="bmd-label-floating">Card CVV:</label>
                                        <input type="text" name="card_cvv" class="form-control @error('card_cvv') is-invalid @enderror" value="{{ old('card_cvv') }}">
                                        <span class="material-input"></span>
                                        @error('card_cvv')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="bmd-label-floating">Expiration Date Month</label>
                                                <input type="text" name="month" class="form-control @error('month') is-invalid @enderror" value="{{ old('month') }}">
                                                <span class="material-input"></span>
                                                @error('month')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="bmd-label-floating">Expiration Date Year</label>
                                                <input type="text" name="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year') }}">
                                                <span class="material-input"></span>
                                                @error('year')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value=""> I'm not a robot
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Passer la commande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                 </div>

                <div class="col-5 card">
                    <div class="card-body">
                        <h3 class="card-title">Panier</h3>
                        <br />
                        <div class="table-responsive">
                            <table class="col-12 table table-shopping">
                                <tbody>
                                @foreach(session('userCart') as $key => $product)
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="{{ $product['image'] }}" alt="...">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('products.show', $key) }}">{{ $product['name'] }}</a>
                                        <br />
                                        <small>by {{ $product['brand'] }}</small>
                                    </td>
                                    <td>
                                        Couleur: {{ $product['color'] }} <br>
                                        Taille: {{ $product['size'] }} <br>
                                        Prix: {{ $product['price'] }}<small> &euro;</small> <br>
                                        Qté: {{ $product['quantity'] }} <br>
                                    </td>
                                    <td>
                                        {{ $product['quantity'] * $product['price'] }}<small> &euro;</small>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
