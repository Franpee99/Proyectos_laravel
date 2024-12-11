<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    /** @use HasFactory<\Database\Factories\EjemplarFactory> */
    use HasFactory;

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
