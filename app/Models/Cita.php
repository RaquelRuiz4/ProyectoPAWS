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
            join("Perro", "Perro.idPer", "Cita.idPer")
            ->join("Veterinario", "Cita.idVet", "Veterinario.idUsu")
            ->join("Usuario", "Cita.idVet", "Usuario.idUsu")
            ->where("Cita.idDue", $idUsuario)
            ->get();
    }

    static function todasCitas()
    {
        return self::
        join("Perro", "Perro.idPer", "Cita.idPer")
        ->join("Veterinario", "Cita.idVet", "Veterinario.idUsu")
        ->join("Usuario", "Cita.idVet", "Usuario.idUsu")
        ->get();
    }

    static function opcionesCita($idUsuario)
    {
        $misPerros = Perro::consiguePerros($idUsuario);

        $veterinarios = Veterinario::consigueDatos();
        return [$misPerros, $veterinarios];
    }

}