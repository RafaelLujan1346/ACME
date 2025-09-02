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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_proyecto');
            $table->string('descripcion');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('arquitectos_id')->constrained('arquitectos');
            $table->foreignId('zonas_id')->constrained('zonas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
