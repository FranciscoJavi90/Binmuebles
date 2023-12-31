<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
        'imagen',
        'estado',
        'ubicacion_general',
        'disponibilidad',
        'precio_venta',
        'precio_alquiler',
    ];}



