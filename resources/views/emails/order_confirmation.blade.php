<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Récapitulatif de votre commande</h2>
{{--<p>Réception d'une prise de contact avec les éléments suivants :</p>--}}
<ul>
    <li><strong>Nom</strong> : {{ $contact['first_name'] . ' ' . $contact['last_name']}}</li>
    <li><strong>Email</strong> : {{ $contact['email'] }}</li>
    @foreach(session('userCart') as $product)
        <li><strong>Produit</strong> : {{ $product['name'] }}</li>
    @endforeach
    <li><strong>Total</strong> : {{ session('userCartTotal') }}</li>
</ul>
</body>
</html>
