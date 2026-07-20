<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id('id_pedido');
        $table->unsignedBigInteger('id_cliente');
        $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        $table->enum('estado', ['recibido', 'en_preparacion', 'listo', 'entregado'])->default('recibido');
        $table->decimal('total', 8, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
