<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_identificacion',
        'numero_identificacion',
        'nombre_completo',
        'fecha_nacimiento',
        'edad',
        'genero',
        'correo_electronico',
        'numero_celular',
        'contacto_emergencia',
        'telefono_contacto_emergencia',
        'eps',
        'tipo_cicla',
        'usuario_instagram',
        'perfil_strava',
        'distancia_recorrida',
        'soporte_pago',
        'medio_pago',
        'talla_hombre',
        'talla_mujer',
        'exoneracion',
        'estado_inscripcion',
    ];
}
