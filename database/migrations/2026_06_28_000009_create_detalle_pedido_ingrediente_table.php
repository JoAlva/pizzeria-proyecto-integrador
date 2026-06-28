<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detalle_pedido_ingrediente', function (Blueprint $table) {
            $table->unsignedBigInteger('id_detalle');
            $table->unsignedBigInteger('id_ingrediente');
            $table->primary(['id_detalle', 'id_ingrediente']);
            $table->foreign('id_detalle')->references('id_detalle')->on('detalle_pedidos')->onDelete('cascade');
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido_ingrediente');
    }
};