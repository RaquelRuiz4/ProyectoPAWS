
<x-app-layout>
    <h1 class="text-2xl font-bold text-center mt-4">Edit Pet</h1>
    <div class="container w-65 flex justify-center">
        <form action="{{ route("mascotas.editar") }}" method="post" class="mb-8">
            @csrf
            <input type="hidden" id="idPer" name="idPer" value="{{$mascota->idPer}}">

            <div class="mb-4">
                <label for="nombrePerro" class="block font-bold">Pet Name:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" id="nombrePerro" name="nombrePerro" value="{{$mascota->nombrePerro}}">
            </div>

            <div class="mb-4">
                <label for="raza" class="block font-bold">Breed:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" id="raza" name="raza" value="{{$mascota->raza}}">
            </div>

            <div class="mb-4">
                <label for="genero" class="block font-bold">Gender:</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" id="genero" name="genero" value="{{$mascota->genero}}">
            </div>

            <div class="mb-4">
                <label for="edad" class="block font-bold">Age:</label>
                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" id="edad" name="edad" value="{{$mascota->edad}}">
            </div>

            <div class="mb-4">
                <label for="peso" class="block font-bold">Weight:</label>
                <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" id="peso" name="peso" value="{{$mascota->peso}}">
            </div>

            <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded mt-3 transition-colors duration-300 ease-in-out">Save</button>
        </form>
    </div>
</x-app-layout>
