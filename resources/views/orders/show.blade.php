@extends('layouts.app')

@section('content')
    <h1>Detalles del Pedido</h1>
    <p>Pastel: {{ $order->cake->name }}</p>
    <p>Fecha de entrega: {{ $order->delivery_date }}</p>
    <p>Estado: {{ $order->order_status }}</p>
    <h3>Ingredientes:</h3>
    <ul>
        @foreach($order->ingredients as $ingredient)
            <li>{{ $ingredient->name }}</li>
        @endforeach
    </ul>
@endsection
