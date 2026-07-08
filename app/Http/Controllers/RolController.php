<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RolController extends Controller
{
    public function index()
    {
        return response()->json(Rol::with('usuarios')->get());
    }

    public function store(Request $request)
    {
        $rol = Rol::create($request->validate([
            'nombre_rol' => ['required', 'string', 'max:50', 'unique:roles,nombre_rol'],
            'descripcion' => ['nullable', 'string', 'max:255'],
        ]));

        return response()->json($rol, 201);
    }

    public function show(string $id)
    {
        return response()->json(Rol::with('usuarios')->findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $rol = Rol::findOrFail($id);
        $rol->update($request->validate([
            'nombre_rol' => ['required', 'string', 'max:50', Rule::unique('roles', 'nombre_rol')->ignore($id, 'id_rol')],
            'descripcion' => ['nullable', 'string', 'max:255'],
        ]));

        return response()->json($rol);
    }

    public function destroy(string $id)
    {
        $rol = Rol::findOrFail($id);

        if ($rol->usuarios()->exists()) {
            return response()->json(['message' => 'No se puede eliminar un rol con usuarios asignados'], 422);
        }

        $rol->delete();

        return response()->json(['message' => 'Rol eliminado']);
    }
}
