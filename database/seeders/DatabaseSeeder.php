<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = Rol::firstOrCreate(
            ['nombre_rol' => 'admin'],
            ['descripcion' => 'Acceso completo al panel administrativo']
        );

        Rol::firstOrCreate(
            ['nombre_rol' => 'trabajador'],
            ['descripcion' => 'Acceso operativo para gestionar pedidos y productos']
        );

        Usuario::firstOrCreate([
            'correo' => 'admin@rooster.test',
        ], [
            'nombre' => 'Administrador',
            'contrasena' => 'password123',
            'id_rol' => $admin->id_rol,
        ]);
    }
}
