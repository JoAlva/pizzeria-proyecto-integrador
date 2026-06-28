<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return response()->json(Cliente::all());
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->validate([
            'nombre'   => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'correo'   => 'required|email|unique:clientes,correo'
        ]));
        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        return response()->json(Cliente::with('pedidos')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->validate([
            'nombre'   => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'correo'   => 'required|email|unique:clientes,correo,'.$id.',id_cliente'
        ]));
        return response()->json($cliente);
    }

    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return response()->json(['message' => 'Cliente eliminado']);
    }
}