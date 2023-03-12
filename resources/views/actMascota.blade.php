@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Editar mascota</h1>
    <div class="container w-65 d-flex justify-content-center">
        <form action="{{ route("mascotas.editar") }}" method="post">
            @csrf
            <input type="hidden" id="idPer" name="idPer" value="{{$mascota->idPer}}">

            <div class="form-group">
                <label for="nombrePerro">Nombre Mascota</label>
                <input type="text" class="form-control" id="nombrePerro" name="nombrePerro"
                    value="{{$mascota->nombrePerro}}">
            </div>

            <div class="form-group">
                <label for="raza">Raza</label>
                <input type="text" class="form-control" id="raza" name="raza" value="{{$mascota->raza}}">
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{$mascota->genero}}">
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{$mascota->edad}}">
            </div>

            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="number" class="form-control" id="peso" name="peso" value="{{$mascota->peso}}">
            </div>
            <button class="btn btn-dark mt-3">Guardar</button>
        </form>
    </div>
</x-app-layout>