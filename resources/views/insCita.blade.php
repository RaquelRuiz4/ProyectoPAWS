@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Sacar cita</h1>
    <div class="container w-65 d-flex justify-content-center">
        <form action="{{ route("citas.insertarCita") }}" method="post">
            @csrf
            <div class="form-group">
                <label for="idPerro">Nombre Mascota</label>
                <select class="form-control" id="idPerro" name="idPerro">
                    @foreach($misPerros as $perro)
                    <option value="{{$perro->idPer}}">{{$perro->nombrePerro}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="idVeterinario">Veterinarios</label>
                <select class="form-control" id="idVeterinario" name="idVeterinario">
                    @foreach($veterinarios as $veterinario)
                    <option value="{{$veterinario->idUsu}}">
                        {{$veterinario->especialidad}} - {{$veterinario->nombre}} {{$veterinario->apellido}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_cita">Fecha y hora</label>
                <input type="datetime-local" class="form-control" id="fecha_cita" name="fecha_cita">
            </div>
            <button class="btn btn-dark mt-3">Aceptar</button>
        </form>
    </div>
</x-app-layout>