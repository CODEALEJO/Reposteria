@extends('layouts.app')

@section('content')
    <h1>Pedidos</h1>
    <table>
        <thead>
            <tr>
                <th>Pastel</th>
                <th>Fecha de entrega</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->cake->name }}</td>
                    <td>{{ $order->delivery_date }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td><a href="{{ route('orders.show', $order->id) }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
