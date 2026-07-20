<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::with('categoria')->get());
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->validate([
            'nombre'       => 'required|string|max:100',
            'precio'       => 'required|numeric',
            'id_categoria' => 'required|exists:categorias,id_categoria'
        ]));
        return response()->json($producto, 201);
    }

    public function show($id)
    {
        return response()->json(Producto::with('categoria')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->validate([
            'nombre'       => 'required|string|max:100',
            'precio'       => 'required|numeric',
            'id_categoria' => 'required|exists:categorias,id_categoria'
        ]));
        return response()->json($producto);
    }

    public function destroy($id)
    {
        Producto::findOrFail($id)->delete();
        return response()->json(['message' => 'Producto eliminado']);
    }
}