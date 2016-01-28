<?php
$totalPrice = 0;
foreach ($order->products as $product) {
    $totalPrice += $product->pivot->quantity*($product->sale_price ? $product->sale_price : $product->price);
}
?>

<h1>Neue Bestelleung von</h1>

<p>Besteller: {{ $user->prename }} {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<p>Lieferort: {{ $order->destination }}</p>

<h2>Produkte</h2>
<ul>
@foreach($order->products as $product)
    <li>{{ $product->pivot->quantity }}x {{ $product->name }} à {{ $product->sale_price ? $product->sale_price : $product->price }}</li>
@endforeach
</ul>

<h1>Preis Total: {{ $totalPrice }}</h1>