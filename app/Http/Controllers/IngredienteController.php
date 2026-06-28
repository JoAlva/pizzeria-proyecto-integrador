<?php
namespace App\Http\Controllers;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    public function index()
    {
        return response()->json(Ingrediente::all());
    }

    public function store(Request $request)
    {
        $ingrediente = Ingrediente::create($request->validate([
            'nombre' => 'required|string|max:100',
            'unidad' => 'nullable|string|max:50'
        ]));
        return response()->json($ingrediente, 201);
    }

    public function show($id)
    {
        return response()->json(Ingrediente::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->update($request->validate([
            'nombre' => 'required|string|max:100',
            'unidad' => 'nullable|string|max:50'
        ]));
        return response()->json($ingrediente);
    }

    public function destroy($id)
    {
        Ingrediente::findOrFail($id)->delete();
        return response()->json(['message' => 'Ingrediente eliminado']);
    }
}