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
        Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->string('direccion');
            $table->string('modulo');
            $table->foreignId('zona_id')->constrained('zonas');
            $table->string('numero_plano');
            $table->foreignId('pdf_id')->constrained('pdfs');
            $table->foreignId('proyecto_id')->constrained('proyectos');
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
