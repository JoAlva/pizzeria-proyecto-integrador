<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('usuarios', 'id') && ! Schema::hasColumn('usuarios', 'id_usuario')) {
            Schema::table('usuarios', function (Blueprint $table) {
                $table->renameColumn('id', 'id_usuario');
            });
        }

        Schema::table('usuarios', function (Blueprint $table) {
            if (! Schema::hasColumn('usuarios', 'nombre')) {
                $table->string('nombre', 100)->after('id_usuario');
            }

            if (! Schema::hasColumn('usuarios', 'correo')) {
                $table->string('correo', 100)->unique()->after('nombre');
            }

            if (! Schema::hasColumn('usuarios', 'contrasena')) {
                $table->string('contrasena')->after('correo');
            }

            if (! Schema::hasColumn('usuarios', 'id_rol')) {
                $table->unsignedBigInteger('id_rol')->nullable()->after('contrasena');
                $table->foreign('id_rol')->references('id_rol')->on('roles');
            }
        });
    }

    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            if (Schema::hasColumn('usuarios', 'id_rol')) {
                $table->dropForeign(['id_rol']);
                $table->dropColumn('id_rol');
            }

            foreach (['contrasena', 'correo', 'nombre'] as $column) {
                if (Schema::hasColumn('usuarios', $column)) {
                    $table->dropColumn($column);
                }
            }
        });

        if (Schema::hasColumn('usuarios', 'id_usuario') && ! Schema::hasColumn('usuarios', 'id')) {
            Schema::table('usuarios', function (Blueprint $table) {
                $table->renameColumn('id_usuario', 'id');
            });
        }
    }
};
