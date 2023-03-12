<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;
    protected $table = "veterinario";
    protected $primaryKey = "idVet";

    public $timestamps = false;

    static function consigueDatos()
    {
        return self::
            join("Usuario", "Usuario.idUsu", "Veterinario.idUsu")
            ->get();
    }


}