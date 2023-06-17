<x-app-layout>
    <h1 class="text-2xl font-bold text-center mt-4">Insert Pet</h1>
    <div class="container mx-auto">
        <form action="{{ route('mascotas.insertar') }}" method="post" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="nombrePerro" class="block font-bold">Pet Name</label>
                <input type="text" class="form-input w-full" id="nombrePerro" name="nombrePerro">
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="raza" class="block font-bold">Breed</label>
                    <input type="text" class="form-input w-full" id="raza" name="raza">
                </div>
                <div>
                    <label for="genero" class="block font-bold">Gender</label>
                    <input type="text" class="form-input w-full" id="genero" name="genero">
                </div>
            </div>

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="edad" class="block font-bold">Age</label>
                    <input type="number" class="form-input w-full" id="edad" name="edad">
                </div>
                <div>
                    <label for="peso" class="block font-bold">Weight</label>
                    <input type="number" class="form-input w-full" id="peso" name="peso">
                </div>
            </div>

            <div class="mb-4">
                <label for="foto" class="block font-bold">Photo</label>
                <input type="text" class="form-input w-full" id="foto" name="foto">
            </div>

            <button class="bg-yellow-400 text-white py-2 px-4 rounded mt-3">Save</button>
        </form>
    </div>
</x-app-layout>
