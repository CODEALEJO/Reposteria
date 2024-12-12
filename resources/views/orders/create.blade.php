@extends('layouts.app')

@section('content')
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div>
            <label for="cake_id">Pastel:</label>
            <select name="cake_id" id="cake_id">
                @foreach($cakes as $cake)
                    <option value="{{ $cake->id }}">{{ $cake->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="delivery_date">Fecha de entrega:</label>
            <input type="date" name="delivery_date" id="delivery_date" required>
        </div>

        <div>
            <label for="order_status">Estado del pedido:</label>
            <input type="text" name="order_status" id="order_status" required>
        </div>

        <div>
            <label for="ingredients">Ingredientes:</label>
            <select name="ingredients[]" id="ingredients" multiple>
                @foreach($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="priority">Prioridad:</label>
            <select name="priority" id="priority">
                <option value="high">Alta</option>
                <option value="medium" selected>Media</option>
                <option value="low">Baja</option>
            </select>
        </div>

        <button type="submit">Crear Pedido</button>
    </form>
@endsection
