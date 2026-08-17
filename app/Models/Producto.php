<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'nombre', 'precio', 'id_categoria',
        'en_descuento', 'porcentaje_descuento',
        'descripcion', 'imagen', 'ingredientes'
    ];

    protected $casts = [
        'en_descuento' => 'boolean',
        'porcentaje_descuento' => 'decimal:2',
        'ingredientes' => 'array',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}