<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicamentoController extends Controller
{
    public function index()
    {
        if(!Auth::user()->admin){
            return redirect()->route('inicio');
        }
        $medicamentos = Medicamento::all();
        return view('medicamentos.index', compact('medicamentos'));
    }

    public function create()
    {
        return view('medicamentos.insMedicamento');
    }

    public function store(Request $request)
    {
        // Valida los datos del formulario de creación
        $request->validate([
            'nombre' => 'required',
            'cantidad' => 'required|numeric',
        ]);

        // Crea un nuevo medicamento en la base de datos
        $medicamento = new Medicamento();
        $medicamento->Nombre = $request->nombre;
        $medicamento->Cantidad = $request->cantidad;
        $medicamento->Descripción = $request->descripcion;
        $medicamento->Indicaciones = $request->indicaciones;
        $medicamento->Precio = $request->precio;

        $medicamento->save();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento creado correctamente.');
    }

    public function edit(Request $request, $medicamento)
    {
        //$medicamentoInfo = Medicamento::find($medicamento);
        $medicamentoInfo = Medicamento::where('ID_Medicamento', $medicamento)->first();
        return view('medicamentos.actMedicamento',  ["medicamento" => $medicamentoInfo]);
    }

    public function update(Request $request, Medicamento $medicamento)
    {
        // Valida los datos del formulario de edición
        $request->validate([
            'nombre' => 'required',
            'cantidad' => 'required|numeric',
        ]);

        $medicamento->Nombre = $request->nombre;
        $medicamento->Cantidad = $request->cantidad;
        $medicamento->save();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento actualizado correctamente.');
    }

    public function destroy(Medicamento $medicamento)
    {
        // Elimina el medicamento de la base de datos
        $medicamento->delete();

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento eliminado correctamente.');
    }
}

