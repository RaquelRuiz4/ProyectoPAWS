@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Insertar mascota</h1>
    <div class="container w-65 mx-auto">
        <form action="{{ route('mascotas.insertar') }}" method="post" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="nombrePerro" class="block font-bold">Nombre Mascota</label>
                <input type="text" class="form-input" id="nombrePerro" name="nombrePerro">
            </div>

            <div class="mb-4">
                <label for="raza" class="block font-bold">Raza</label>
                <input type="text" class="form-input" id="raza" name="raza">
            </div>

            <div class="mb-4">
                <label for="genero" class="block font-bold">Género</label>
                <input type="text" class="form-input" id="genero" name="genero">
            </div>

            <div class="mb-4">
                <label for="edad" class="block font-bold">Edad</label>
                <input type="number" class="form-input" id="edad" name="edad">
            </div>

            <div class="mb-4">
                <label for="peso" class="block font-bold">Peso</label>
                <input type="number" class="form-input" id="peso" name="peso">
            </div>

            <div class="mb-4">
                <label for="foto" class="block font-bold">Foto</label>
                <input type="text" class="form-input" id="foto" name="foto">
            </div>

            <button class="btn btn-dark mt-3">Guardar</button>
        </form>
    </div>
</x-app-layout>
