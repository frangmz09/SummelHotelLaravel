<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nombre',
        'precio',
        'huespedes',
        'descripcion',
        'superficie',
        'imagen',
        'is_active',
    ];

    public function precio_format()
    {
        return '$'. number_format($this->precio, 2, ',', '.');
    }

}
