<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function muestraClientes(Request $req)
    {
        $clientes = Usuario::devuelveClientes();
        return view("clientes", ["clientes" => $clientes]);
    }
}