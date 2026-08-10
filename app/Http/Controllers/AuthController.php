<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contrasena' => 'required'
        ]);

        $usuario = Usuario::with('rol')
            ->where('correo', $request->correo)
            ->where('contrasena', $request->contrasena)
            ->first();

        if (!$usuario) {
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ], 401);
        }

        return response()->json([
            'id_usuario' => $usuario->id_usuario,
            'nombre' => $usuario->nombre,
            'correo' => $usuario->correo,
            'rol' => $usuario->rol->nombre_rol
        ]);
    }

public function registro(Request $request)
{
    $request->validate([
        'nombre'    => 'required|string|max:100',
        'correo'    => 'required|email|unique:usuarios,correo',
        'contrasena'=> 'required|min:6',
    ]);

    $usuario = \App\Models\Usuario::create([
        'nombre'    => $request->nombre,
        'correo'    => $request->correo,
        'contrasena'=> $request->contrasena,
        'id_rol'    => 3
    ]);

    return response()->json([
        'id_usuario' => $usuario->id_usuario,
        'nombre'     => $usuario->nombre,
        'correo'     => $usuario->correo,
        'rol'        => 'cliente'
    ], 201);
}


}