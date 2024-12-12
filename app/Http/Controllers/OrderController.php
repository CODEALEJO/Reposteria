<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cake;
use App\Models\Ingredient;
use App\Models\Order;

class OrderController extends Controller
{
     /**
     * Muestra el formulario para crear un nuevo pedido.
     */
    public function create()
    {
        $cakes = Cake::all();
        $ingredients = Ingredient::all();
        return view('orders.create', compact('cakes', 'ingredients'));
    }

    /**
     * Guarda un nuevo pedido.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cake_id' => 'required|exists:cakes,id',
            'delivery_date' => 'required|date',
            'order_status' => 'required|string',
        ]);

        $order = new Order();
        $order->user_id = Auth::id();
        $order->cake_id = $request->cake_id;
        $order->delivery_date = $request->delivery_date;
        $order->order_status = $request->order_status;
        $order->save();

        // Agregar ingredientes al pedido
        $order->ingredients()->attach($request->ingredients);

        return redirect()->route('orders.index')->with('success', 'Pedido creado exitosamente');
    }

    /**
     * Muestra todos los pedidos.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Muestra los detalles de un pedido.
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }
}
