@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Insertar mascota</h1>
    <div class="container w-65 d-flex justify-content-center">
        <form action="{{ route("mascotas.insertar") }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nombrePerro">Nombre Mascota</label>
                <input type="text" class="form-control" id="nombrePerro" name="nombrePerro">
            </div>

            <div class="form-group">
                <label for="raza">Raza</label>
                <input type="text" class="form-control" id="raza" name="raza">
            </div>

            <div class="form-group">
                <label for="genero">Género</label>
                <input type="text" class="form-control" id="genero" name="genero">
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad">
            </div>

            <div class="form-group">
                <label for="peso">Peso</label>
                <input type="number" class="form-control" id="peso" name="peso">
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="text" class="form-control" id="foto" name="foto">
            </div>
            <button class="btn btn-dark mt-3">Guardar</button>
        </form>
    </div>
</x-app-layout>