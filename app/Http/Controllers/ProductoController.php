<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::with('categoria')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'       => 'required|string|max:100',
            'precio'       => 'required|numeric',
            'id_categoria' => 'required|exists:categorias,id_categoria',
            'en_descuento' => 'nullable|boolean',
            'porcentaje_descuento' => 'nullable|numeric|min:0|max:90|required_if:en_descuento,1',
            'descripcion'  => 'nullable|string',
            'imagen'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:8192',
            'ingredientes' => 'nullable|string', // llega como JSON string
        ]);

        $validated['en_descuento'] = $request->boolean('en_descuento');

        if (!empty($validated['ingredientes'])) {
            $validated['ingredientes'] = json_decode($validated['ingredientes'], true);
        } else {
            unset($validated['ingredientes']);
        }

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('productos', 'public');
            $validated['imagen'] = 'storage/' . $path;
        } else {
            unset($validated['imagen']);
        }

        $producto = Producto::create($validated);
        return response()->json($producto, 201);
    }

    public function show($id)
    {
        return response()->json(Producto::with('categoria')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $validated = $request->validate([
            'nombre'       => 'required|string|max:100',
            'precio'       => 'required|numeric',
            'id_categoria' => 'required|exists:categorias,id_categoria',
            'en_descuento' => 'nullable|boolean',
            'porcentaje_descuento' => 'nullable|numeric|min:0|max:90|required_if:en_descuento,1',
            'descripcion'  => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:8192',
            'ingredientes' => 'nullable|string',
        ]);

        $validated['en_descuento'] = $request->boolean('en_descuento');

        if (!empty($validated['ingredientes'])) {
            $validated['ingredientes'] = json_decode($validated['ingredientes'], true);
        } else {
            unset($validated['ingredientes']);
        }

        if ($request->hasFile('imagen')) {
            // borra la imagen vieja si no es el logo por defecto
            if ($producto->imagen && str_starts_with($producto->imagen, 'storage/productos/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $producto->imagen));
            }
            $path = $request->file('imagen')->store('productos', 'public');
            $validated['imagen'] = 'storage/' . $path;
        } else {
            unset($validated['imagen']); // no tocar la imagen si no mandaron una nueva
        }

        $producto->update($validated);
        return response()->json($producto);
    }

    public function destroy($id)
    {
        Producto::findOrFail($id)->delete();
        return response()->json(['message' => 'Producto eliminado']);
    }
}