<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Veterinario;
use App\Models\Perro;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    protected $table = "cita";
    protected $primaryKey = "idCit";
    public $timestamps = false;

    static function infoCita($idUsuario)
    {
        return self::
            join("perro", "perro.idPer", "cita.idPer")
            ->join("veterinario", "cita.idVet", "veterinario.idUsu")
            ->join("usuario", "cita.idVet", "usuario.idUsu")
            ->where("cita.idDue", $idUsuario)
            ->get();
    }

    static function todasCitas()
    {
        return self::
        join("perro", "perro.idPer", "cita.idPer")
        ->join("veterinario", "cita.idVet", "veterinario.idUsu")
        ->join("usuario", "cita.idVet", "usuario.idUsu")
        ->get();
    }

    static function opcionesCita($idUsuario)
    {
        $misPerros = Perro::consiguePerros($idUsuario);

        $veterinarios = Veterinario::consigueDatos();
        return [$misPerros, $veterinarios];
    }

}