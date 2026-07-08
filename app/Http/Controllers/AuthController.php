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
}