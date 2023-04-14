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
        Schema::create('recordatorios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('recordatorio');
            $table->string('importancia');
            $table->foreignId('id_temas')
             ->constrained('temas')
             ->cascadeOnUpdate();
            $table->foreignId('id_asignaturas')
             ->constrained('asignaturas')
             ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recordatorios');
    }
};
