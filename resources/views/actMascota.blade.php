@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Edit Pet</h1>
    <div class="container w-65 d-flex justify-content-center">
        <form action="{{ route("mascotas.editar") }}" method="post">
            @csrf
            <input type="hidden" id="idPer" name="idPer" value="{{$mascota->idPer}}">

            <div class="form-group">
                <label for="nombrePerro">Pet Name</label>
                <input type="text" class="form-control" id="nombrePerro" name="nombrePerro"
                    value="{{$mascota->nombrePerro}}">
            </div>

            <div class="form-group">
                <label for="raza">Breed</label>
                <input type="text" class="form-control" id="raza" name="raza" value="{{$mascota->raza}}">
            </div>

            <div class="form-group">
                <label for="genero">Gender</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{$mascota->genero}}">
            </div>

            <div class="form-group">
                <label for="edad">Age</label>
                <input type="number" class="form-control" id="edad" name="edad" value="{{$mascota->edad}}">
            </div>

            <div class="form-group">
                <label for="peso">Weight</label>
                <input type="number" class="form-control" id="peso" name="peso" value="{{$mascota->peso}}">
            </div>
            <button class="btn btn-dark mt-3">Save</button>
        </form>
    </div>
</x-app-layout>
