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
            join("usuario", "usuario.idUsu", "perro.idDue")
            ->where("perro.idDue", $idUsuario)
            ->get();
    }
}