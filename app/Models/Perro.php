<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;

    protected $table = "perro";
    protected $primaryKey = "idPer";

    public $timestamps = false;

    static function consiguePerros($idUsuario)
    {
        return self::
            join("Usuario", "Usuario.idUsu", "perro.idDue")
            ->where("perro.idDue", $idUsuario)
            ->get();
    }
}