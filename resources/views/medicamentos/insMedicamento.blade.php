<x-app-layout>
            <h1 class="text-3xl font-bold text-center mt-4">Create Medication</h1>
        
    <div class="container w-65 flex justify-center">
        
        <form action="{{ route('medicamentos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block font-bold">Name:</label>
                <input type="text" name="nombre" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" required>
            </div>
            <div class="flex mb-4">
                <div class="w-1/2 mr-2">
                    <label for="cantidad" class="block font-bold">Quantity:</label>
                    <input type="number" name="cantidad" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" required>
                </div>
                <div class="w-1/2 ml-2">
                    <label for="precio" class="block font-bold">Price:</label>
                    <input type="number" name="precio" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="descripcion" class="block font-bold">Description:</label>
                <textarea name="descripcion" rows="4" cols="50" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400">Write a short description</textarea>
            </div>
            <div class="mb-4">
                <label for="indicaciones" class="block font-bold">Indications:</label>
                <textarea name="indicaciones" rows="4" cols="50" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400">Write some indications if any</textarea>
            </div>
            <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Create</button>
        </form>
    </div>
</x-app-layout>
