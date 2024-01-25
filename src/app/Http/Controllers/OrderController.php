<?php

namespace App\Http\Controllers;

use App\Jobs\OrderCreated;
use App\Models\Order;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    protected Model $model;

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $orders = Order::all();
        return response()->json($this->model->all());
    }

    public function store(Request $request)
    {
        // Obtener la cantidad de pedidos a realizar
        $orderCount = $request->input('order_count', 1);
        for ($i = 0; $i < $orderCount; $i++) {
            // Enviar cada pedido a la cola
            OrderCreated::dispatch();
        }
        return response()->json(['message' => 'Order received and is being processed']);
    }
}
