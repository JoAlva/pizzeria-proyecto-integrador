<?php
namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return response()->json(Categoria::with('productos')->get());
    }

    public function store(Request $request)
    {
        $categoria = Categoria::create($request->validate([
            'nombre' => 'required|string|max:100'
        ]));
        return response()->json($categoria, 201);
    }

    public function show($id)
    {
        return response()->json(Categoria::with('productos')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->validate([
            'nombre' => 'required|string|max:100'
        ]));
        return response()->json($categoria);
    }

    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();
        return response()->json(['message' => 'Categoría eliminada']);
    }
}