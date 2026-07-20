<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $table = 'detalle_pedidos';
    protected $primaryKey = 'id_detalle';
    protected $fillable = ['id_pedido', 'id_producto', 'cantidad', 'precio_unitario', 'sub_total'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido', 'id_pedido');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto', 'id_producto');
    }

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'detalle_pedido_ingrediente', 'id_detalle', 'id_ingrediente');
    }
}