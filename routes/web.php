<?php

use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [
    'middleware' => 'guest',
    function () {
        //return view('auth.login');
        return view('inicio');
    }
]);

Route::get('/inicio', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('inicio');

Route::middleware('auth')->group(function () {
    Route::get("/veterinarios", [VeterinarioController::class, "listar"])->name("veterinarios");


      Route::group(
        [
            "prefix" => "medicamentos",
            "as" => "medicamentos.",
            "middleware" => ["auth"]
        ],
        function () {
           
            Route::get('/', [MedicamentoController::class, 'index'])->name('index');
            Route::get('/crear', [MedicamentoController::class, 'create'])->name('create');
            Route::post('/', [MedicamentoController::class, 'store'])->name('store');
            Route::get('/{medicamento}/editar', [MedicamentoController::class, 'edit'])->name('edit');
            Route::patch('/{medicamento}', [MedicamentoController::class, 'update'])->name('update');
            Route::delete('/{medicamento}', [MedicamentoController::class, 'destroy'])->name('destroy');
        }
    );



    Route::group(
        [
            "prefix" => "mascotas",
            "as" => "mascotas.",
            "middleware" => ["auth"]
        ],
        function () {
            // Muestra las mascotas del usuario
            Route::get("/mostrar", [MascotasController::class, "mostrar"])->name("mostrar");

            // Redirige hasta el formulario que actualiza la mascota en cuestión 
            Route::get("/formularioAct/{mascota}", [MascotasController::class, "formularioAct"])->name("formularioAct");

            // Edita la mascota con los datos recogidos del formulario
            Route::post("/editar", [MascotasController::class, "editar"])->name("editar");


            // Redirige hasta el formulario que inserta la mascota en cuestión 
            Route::get("/formularioIns", [MascotasController::class, "formularioIns"])->name("formularioIns");

            // Insertar la mascota con los datos recogidos del formulario
            Route::post("/insertar", [MascotasController::class, "insertar"])->name("insertar");

            // Edita la mascota con los datos recogidos del formulario
            Route::get("/eliminar/{idMascota}", [MascotasController::class, "eliminar"])->name("eliminar");
        }
    );

    Route::group(
        [
            "prefix" => "citas",
            "as" => "citas.",
            "middleware" => ["auth"]
        ],
        function () {

            Route::get("/mostrarCitas", [CitaController::class, "listar"])->name("mostrarCitas");

            // Redirige hasta el formulario que actualiza la mascota en cuestión 
            Route::get("/eliminar/{idCita}", [CitaController::class, "eliminar"])->name("eliminarCita");

            // Insertar cita con los datos recogidos del formulario
            Route::post("/insertarCita", [CitaController::class, "insertarCita"])->name("insertarCita");

            Route::get("/insCita", [CitaController::class, "mostrarFormCita"])->name("insCita");
        }
    );

    Route::group(
        [
            "prefix" => "clientes",
            "as" => "clientes.",
            "middleware" => ["auth"]
        ],
        function () {
            Route::get("/cliente/{idCliente}/mascotas", [MascotasController::class, "muestraMascotasAjenas"])->name("muestraMascotasAjenas");

            Route::get("/muestraClientes", [UsuarioController::class, "muestraClientes"])->name("muestraClientes");
        }
    );


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';