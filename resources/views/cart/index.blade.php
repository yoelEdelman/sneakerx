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
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../assets/img/product1.jpg" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#jacket">Spring Jacket</a>
                                    <br />
                                    <small>by Dolce&Gabbana</small>
                                </td>
                                <td>
                                    Red
                                </td>
                                <td>
                                    M
                                </td>
                                <td class="td-number text-right">
                                    <small>&euro;</small>549
                                </td>
                                <td class="td-number">
                                    1
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-round btn-info"> <i class="material-icons">remove</i> </button>
                                        <button class="btn btn-round btn-info"> <i class="material-icons">add</i> </button>
                                    </div>
                                </td>
                                <td class="td-number">
                                    <small>&euro;</small>549
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../assets/img/product2.jpg" alt="..." />
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#pants">Short Pants</a>
                                    <br />
                                    <small>by Pucci</small>
                                </td>
                                <td>
                                    Purple
                                </td>
                                <td>
                                    M
                                </td>
                                <td class="td-number">
                                    <small>&euro;</small>499
                                </td>
                                <td class="td-number">
                                    2
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-round btn-info"> <i class="material-icons">remove</i> </button>
                                        <button class="btn btn-round btn-info"> <i class="material-icons">add</i> </button>
                                    </div>
                                </td>
                                <td class="td-number">
                                    <small>&euro;</small>998
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="img-container">
                                        <img src="../assets/img/product3.jpg" alt="...">
                                    </div>
                                </td>
                                <td class="td-name">
                                    <a href="#nothing">Pencil Skirt</a>
                                    <br />
                                    <small>by Valentino</small>
                                </td>
                                <td>
                                    White
                                </td>
                                <td>
                                    XL
                                </td>
                                <td class="td-number">
                                    <small>&euro;</small>799
                                </td>
                                <td class="td-number">
                                    1
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-round btn-info"> <i class="material-icons">remove</i> </button>
                                        <button class="btn btn-round btn-info"> <i class="material-icons">add</i> </button>
                                    </div>
                                </td>
                                <td class="td-number">
                                    <small>&euro;</small>799
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td class="td-total">
                                    Total
                                </td>
                                <td colspan="1" class="td-price">
                                    <small>&euro;</small>2,346
                                </td>
                                <td colspan="1"></td>
                                <td colspan="2" class="text-right">
                                    <button type="button" class="btn btn-info btn-round">Finaliser l'achat <i class="material-icons">keyboard_arrow_right</i></button>
                                </td>
                            </tr>
                            <!-- <tr>
                            <td colspan="6"></td>
                            <td colspan="2" class="text-right">
                              <button type="button" class="btn btn-info btn-round">Complete Purchase <i class="material-icons">keyboard_arrow_right</i></button>
                            </td>
                          </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
