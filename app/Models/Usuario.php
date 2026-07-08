<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['nombre', 'correo', 'contrasena', 'id_rol'];
    protected $hidden = ['contrasena'];

    protected function casts(): array
    {
        return [
            'contrasena' => 'hashed',
        ];
    }

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'id_rol', 'id_rol');
    }
}
