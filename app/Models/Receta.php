<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    //Establece la relación "belongsTo" entrE Receta y  Usuario, indicando que receta pertenece a un usuario.
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}


