<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'fk_movimientos_user_id')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained(table: 'categorias', indexName: 'fk_movimientos_categoria_id')->onDelete('cascade');
            $table->enum('tipo', ['ingreso', 'gasto']);
            $table->string('concepto', 100);
            $table->decimal('importe', 10, 2);
            $table->date('fecha');
            $table->string('descripcion', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
