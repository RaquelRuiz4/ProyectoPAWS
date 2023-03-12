<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
   
    public function listar(Request $req)
    {
        // conseguir id usuario actual
        $user = Auth::user();
        if ($user->admin) {
            $infoCitas = Cita::todasCitas();
        } else {
            // listar citas de usuario actual
            $infoCitas = Cita::infoCita($user->idUsu);
        }
        return view("citas", ["citas" => $infoCitas]);
    }


    public function crear(Request $req)
    {
        // TODO
        return view("citas");
    }

    public function eliminar(Request $req, $idCita)
    {
        $cita = Cita::find($idCita);

        // Comprueba que la cita sea borrada por el dueño o por algún veterinario
        if ($cita->idDue == Auth::id() || Auth::user()->admin)
            Cita::find($idCita)?->delete();

        // redirigimos a la página principal
        return redirect()->route("citas.mostrarCitas");
    }

    public function editar(Request $req, Cita $cita)
    {
        dd($cita);
    }

    public function mostrarFormCita()
    {

        $userId = Auth::id();

        // listar citas de usuario actual
        $datosCita = Cita::opcionesCita($userId);

        return view("insCita", ["misPerros" => $datosCita[0], "veterinarios" => $datosCita[1]]);
    }

    static function insertarCita(Request $req)
    {
       
        $userId = Auth::id();

        $mascota = new Cita;
        $mascota->idPer = $req->idPerro;
        $mascota->idvet = $req->idVeterinario;
        $mascota->idDue = $userId;
        $mascota->fecha_cita = $req->fecha_cita;
        $mascota->save();
        return redirect()->route("citas.mostrarCitas");
    }


}