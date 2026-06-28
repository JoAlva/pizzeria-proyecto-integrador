<?php
namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        return response()->json(Pedido::with(['cliente', 'detalles.producto'])->get());
    }

    public function store(Request $request)
    {
        $pedido = Pedido::create($request->validate([
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'total'      => 'required|numeric',
            'estado'     => 'in:recibido,en_preparacion,listo,entregado'
        ]));
        return response()->json($pedido, 201);
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