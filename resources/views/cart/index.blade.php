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
            <div class="card card-plain">
                <div class="card-body">

                    {{-- Flash messages --}}
                    @if(session()->has('success'))
                        @include('messages.success')
                    @elseif(session()->has('error'))
                        @include('messages.error')
                    @endif

                    <h3 class="card-title">Panier</h3>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-shopping">
                            <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Produit</th>
                                <th class="th-description">Couleur</th>
                                <th class="th-description">Taille</th>
                                <th class="text-right">Prix</th>
                                <th class="text-right">Qté</th>
                                <th class="text-right">Montant</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session('userCart'))

                                @foreach(session('userCart') as $key => $product)
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="{{ $product['image'] }}" alt="...">
                                        </div>
                                    </td>
                                    <td class="td-name">
                                        <a href="{{ route('products.show', $key) }}">{{ $product['name'] }}</a>
                                        <br />
                                        <small>by {{ $product['brand'] }}</small>
                                    </td>
                                    <td>
                                        {{ $product['color'] }}
                                    </td>
                                    <td>
                                        {{ $product['size'] }}
                                    </td>
                                    <td class="td-number text-right">
                                        {{ $product['price'] }}<small> &euro;</small>
                                    </td>
                                    <td class="td-number">
                                        {{ $product['quantity'] }}
                                        <div class="btn-group btn-group-sm">
                                            <form action="{{ route('cart.update', $key) }}" method="POST">
                                                <input name="_method" type="hidden" value="PUT">
                                                @csrf
                                                <button type="submit" class="btn btn-round btn-info"> <i class="material-icons">remove</i> </button>
                                                <input type="hidden" name="product_id" value="{{ $product['product_id'] }}">
                                                <input type="hidden" name="action" value="remove">
                                            </form>
                                            <form action="{{ route('cart.update', $key) }}" method="POST">
                                                <input name="_method" type="hidden" value="PUT">
                                                @csrf
                                                <button type="submit" class="btn btn-round btn-info"> <i class="material-icons">add</i> </button>
                                                <input type="hidden" name="product_id" value="{{ $product['product_id'] }}">
                                                <input type="hidden" name="action" value="add">
                                            </form>
                                        </div>
                                    </td>
                                    <td class="td-number">
                                        {{ $product['price'] }}<small> &euro;</small>
                                    </td>
                                    <td class="td-actions">
                                        <form method="post" action="{{ route('cart.destroy', $key) }}">
                                            <input name="_method" type="hidden" value="DELETE">
                                            @csrf
                                            <button type="submit" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <div class="alert alert-primary" role="alert">
                                    Votre panier est vide
                                </div>
                            @endif
                            <tr>
                                <td colspan="3"></td>
                                <td class="td-total">
                                    Total
                                </td>
                                <td colspan="1" class="td-price">
                                    <small>&euro;</small>{{ session('userCartTotal') }}
                                </td>
                                <td colspan="1"></td>
                                <td colspan="2" class="text-right">
                                    <a href="{{ route('checkout.index') }}" type="button" class="btn btn-info btn-round">Finaliser l'achat <i class="material-icons">keyboard_arrow_right</i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
