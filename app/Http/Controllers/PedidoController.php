<?php
namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index()
    {
        return response()->json(Pedido::with(['cliente', 'detalles.producto'])->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'total' => 'required|numeric',
            'estado' => 'in:recibido,en_preparacion,listo,entregado',
            'metodo_pago' => 'nullable|string',
            'nota_cliente' => 'nullable|string',
            'items' => 'required|array|min:1',
            'items.*.id_producto' => 'required|exists:productos,id_producto',
            'items.*.cantidad' => 'required|integer|min:1',
            'items.*.precio_unitario' => 'required|numeric',
        ]);

        $pedido = DB::transaction(function () use ($data) {
            $pedido = Pedido::create([
                'id_cliente' => $data['id_cliente'],
                'total' => $data['total'],
                'estado' => $data['estado'] ?? 'recibido',
                'metodo_pago' => $data['metodo_pago'] ?? null,
                'nota_cliente' => $data['nota_cliente'] ?? null,
            ]);

            foreach ($data['items'] as $item) {
                $pedido->detalles()->create([
                    'id_producto' => $item['id_producto'],
                    'cantidad' => $item['cantidad'],
                    'precio_unitario' => $item['precio_unitario'],
                    'sub_total' => $item['cantidad'] * $item['precio_unitario'],
                ]);
            }

            return $pedido;
        });

        return response()->json($pedido->load('detalles.producto'), 201);
    }

    public function show($id)
    {
        return response()->json(Pedido::with(['cliente', 'detalles.producto'])->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->validate([
            'estado' => 'required|in:recibido,en_preparacion,listo,entregado'
        ]));
        return response()->json($pedido);
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return response()->json(['message' => 'Pedido eliminado']);
    }
}