<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
  
    public function listar(Request $req)
    {
        return view("veterinarios", ["datos" => Veterinario::consigueDatos()]);
    }

    public function crear(Request $req)
    {
        // TODO
        return view("veterinarios");
    }

    public function borrar(Request $req, Veterinario $tarea)
    {

        $tarea->delete();
        return redirect()->route("veterinario");

    }

}