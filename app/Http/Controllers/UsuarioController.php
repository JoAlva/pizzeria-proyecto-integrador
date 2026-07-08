<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsuarioController extends Controller
{
    public function index()
    {
        return response()->json(Usuario::with('rol')->get());
    }

    public function store(Request $request)
    {
        $usuario = Usuario::create($request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'correo' => ['required', 'email', 'max:100', 'unique:usuarios,correo'],
            'contrasena' => ['required', 'string', 'min:8'],
            'id_rol' => ['required', 'exists:roles,id_rol'],
        ]));

        return response()->json($usuario->load('rol'), 201);
    }

    public function show(string $id)
    {
        return response()->json(Usuario::with('rol')->findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $usuario = Usuario::findOrFail($id);

        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'correo' => ['required', 'email', 'max:100', Rule::unique('usuarios', 'correo')->ignore($id, 'id_usuario')],
            'contrasena' => ['nullable', 'string', 'min:8'],
            'id_rol' => ['required', 'exists:roles,id_rol'],
        ]);

        if (empty($datos['contrasena'])) {
            unset($datos['contrasena']);
        }

        $usuario->update($datos);

        return response()->json($usuario->load('rol'));
    }

    public function destroy(string $id)
    {
        Usuario::findOrFail($id)->delete();

        return response()->json(['message' => 'Usuario eliminado']);
    }
}
