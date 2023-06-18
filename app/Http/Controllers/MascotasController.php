<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MascotasController extends Controller
{
  
    public function mostrar(Request $req)
    {
    
        $userId = Auth::id();

        $mascotas = Perro::consiguePerros($userId);

        return view("mascotas", ["mascotas" => $mascotas]);
    }

    public function muestraMascotasAjenas($idCliente)
    {
        $mascotas = Perro::consiguePerros($idCliente);

        return view("mascotas", ["mascotas" => $mascotas]);
    }

    public function formularioAct(Request $req, Perro $mascota)
    {
        return view("actMascota", ["mascota" => $mascota]);
    }

  
    public function insertar(Request $req)
    {
        $idDueno = Auth::id();

        $mascota = new Perro;
        $mascota->idDue = $idDueno;
        $mascota->nombrePerro = $req->nombrePerro;
        $mascota->raza = $req->raza;
        $mascota->genero = $req->genero;
        $mascota->edad = $req->edad;
        $mascota->peso = $req->peso;
        $mascota->fotoPerro = $req->foto;
        $mascota->save();
        return redirect()->route("mascotas.mostrar");
    }


    public function formularioIns(Request $req, Perro $mascota)
    {
        return view("insMascota");
    }

    public function eliminar(Request $req, $idMascota)
    {

        $mascota = Perro::find($idMascota);
        if (!$mascota) {
            if(Auth::user()->admin){
                return redirect()->route("inicio");
            }
            return redirect()->route("mascotas.mostrar");
        }

        $mascota->delete();
        if(Auth::user()->admin){
            return redirect()->route("mascotas.mostrarUsuario", [$mascota->idDue]);
        }

        return redirect()->route("mascotas.mostrar");

    }

    public function editar(Request $req)
    {

        $mascota = Perro::find($req->idPer);
        if (!$mascota) {
            return;
        }

        $mascota->genero = $req->genero;
        $mascota->raza = $req->raza;
        $mascota->peso = $req->peso;
        $mascota->nombrePerro = $req->nombrePerro;
        $mascota->edad = $req->edad;

        $mascota->save();
        return redirect()->route("mascotas.mostrarUsuario", [$mascota->idDue]);
    }
}