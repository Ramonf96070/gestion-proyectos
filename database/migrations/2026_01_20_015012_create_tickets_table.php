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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            // Identificador visible
            $table->string('folio')->unique();

            // Información del ticket
            $table->string('titulo');
            $table->text('descripcion');

            // Catálogos
            $table->enum('prioridad', ['baja', 'media', 'alta', 'critica'])->index();
            $table->enum('estado', ['nuevo', 'en_proceso', 'en_espera', 'cerrado'])->default('nuevo')->index();

            // Relaciones
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('tecnico_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Control de tiempos
            $table->timestamp('fecha_limite')->nullable()->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
