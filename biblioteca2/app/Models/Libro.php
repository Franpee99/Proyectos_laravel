<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;

    public function ejemplares()
    {
        return $this->hasMany(Ejemplar::class);
    }

    protected $fillable=(['titulo', 'autor']);
}
