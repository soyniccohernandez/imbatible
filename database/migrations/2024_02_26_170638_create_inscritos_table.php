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
        Schema::create('inscritos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_identificacion');
            $table->string('numero_identificacion');
            $table->string('nombre_completo');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('genero');
            $table->string('correo_electronico');
            $table->string('numero_celular');
            $table->string('contacto_emergencia');
            $table->string('telefono_contacto_emergencia');
            $table->string('eps');
            $table->string('tipo_cicla');
            $table->string('usuario_instagram');
            $table->string('perfil_strava')->nullable(); // Permite valores nulos
            $table->string('distancia_recorrida');
            $table->string('soporte_pago');
            $table->string('medio_pago');
            $table->char('talla_hombre', 1)->nullable(); // Permite valores nulos
            $table->char('talla_mujer', 1)->nullable(); // Permite valores nulos
            $table->boolean('exoneracion');
            $table->boolean('estado_inscripcion')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscritos');
    }
};
