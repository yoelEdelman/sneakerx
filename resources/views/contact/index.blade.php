@extends('layout.app')

@section('title')
    <title>Contact</title>
@endsection

@section('body_class')
    contact-page sidebar-collapse
@endsection

@section('header')
    <div id="contactUsMap" class="big-map"></div>
@section('content')

    <div class="main main-raised">
        <div class="contact-content">
            <div class="container">
                <h2 class="title">Envoie-nous un message</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p class="description">Vous pouvez nous contacter pour tout ce qui concerne nos produits. Nous vous contacterons dans les plus brefs délais.<br><br>
                        </p>
                        <form role="form" id="contact-form" method="post">
                            <div class="form-group">
                                <label for="name" class="bmd-label-floating">Votre nom</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmails" class="bmd-label-floating">Adresse e-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmails">
                                <span class="bmd-help">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="bmd-label-floating">Téléphone</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group label-floating">
                                <label class="form-control-label bmd-label-floating" for="message"> Votre message</label>
                                <textarea class="form-control" rows="6" id="message"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Nous contacter">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">pin_drop</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Retrouvez-nous au bureau</h4>
                                <p> 11 Rue Yves Toudic,<br>
                                    75010 Paris,<br>
                                    France
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">phone</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <p> Yoel Edelman<br>
                                    +336 75 20 78 87<br>
                                    Lun - Ven, 8:00-22:00
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">business_center</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Legal Information</h4>
                                <p> Creative Tim Ltd.<br>
                                    VAT &#xB7; EN2341241<br>
                                    IBAN &#xB7; EN8732ENGB2300099123<br>
                                    Bank &#xB7; Great Britain Bank
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
